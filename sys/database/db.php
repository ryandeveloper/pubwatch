<?php
/**
 * PHP 4, 5
 *
 * MyPHPFrame(tm) : Rapid Development Framework (http://cutearts.org)
 * Copyright (c) CuteArts Web Solutions (http://cutearts.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @location      /sys/database/db.php
 * @package       sys
 * @version		  MyPHPFrame(tm) v 1.01
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
 
/**
* Generic database wrapper using PDO
*/
class DB {
	
	private $databaseInfo;			
	private $driver;
	private $host;
	private $user;
	private $pass;
	private $database;	
	private $prefix;	
	private $encoding;

    /**
     * Holds active PDO object
     *
     * @var PDO
     *
     * @access private
     * @static
     */
    private static $db 	= null;

    /**
     * Object type to return data row as
     *
     * @var string
     *
     * @access private
     */
    private $type 	= 'stdClass';

    /**
     * Create new DB object
     * 
     * @param Object $type Object type to return data row as
     *
     * @access public
     */
    function DB( $type = null ){
		$this->connect();
		if( ! is_null( $type ) )$this->type = $type;
    }

    /**
     * Get database object, creating if necessary
     * 
     * @access public
     * @static
     *
     * @return PDO Database object.
     */
    public static function get_instance(){
		if( ! is_null( self::$db ) )return self::$db;
		self::$db = new DB();
		return self::$db;
    }

    /**
     * Create new PDO db connection
     * @uses Config
     * @access private
     */
    private function connect(){
		if( ! is_null( self::$db ) )return;
		
		$environment 		= strtolower(ENVIRONMENT);
		$this->databaseInfo = Database::$$environment;	
		
		$this->host 		= $this->databaseInfo['host'];
		$this->user 		= $this->databaseInfo['user'];
		$this->pass 		= $this->databaseInfo['pass'];
		$this->database		= $this->databaseInfo['database'];	
		
		$conn = 'mysql:dbname=' . $this->database . ';host=' . $this->host;
		try{
		    self::$db = new PDO( $conn, $this->user, $this->pass );
		}catch( PDOException $e ){
		    trigger_error( 'Could not connect to database (' . $conn . ')', E_USER_ERROR );
		}
    }

    /**
     * Prepare SQL query, expect to return as new object of $type
     * 
     * @param String $q SQL Statement
     *
     * @access public
     *
     * @return PDOStatement Prepared statement
     */
    public function &prepare_obj( $q ){
		$st = &$this->prepare( $q );
		if( $this->type ) $st->setFetchMode( PDO::FETCH_CLASS, $this->type );
		return $st;
    }

    /**
     * Prepare SQL query, expect to return into object passed as $type
     * 
     * @param String $q SQL Statement
     *
     * @access public
     *
     * @return PDOStatement Prepared statement
     */
    public function &prepare_self( $q ){
		$st = &$this->prepare( $q );
		$st->setFetchMode( PDO::FETCH_INTO, $this->type );
		//$st->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		return $st;
    }

    /**
     * Prepare SQL query, expect to return into new standard object
     * 
     * @param String $q SQL Statement
     *
     * @access public
     *
     * @return PDOStatement Prepared statement
     */
    public function &prepare( $q ){
        self::$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,false);
		$st = self::$db->prepare( $q );
		$st->setFetchMode( PDO::FETCH_CLASS, 'stdClass' );
		//$st->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		return $st;
    }

    /**
     * Execute SQL query
     * 
     * @param mixed $query SQL Statement or prepared PDOStatement object
     * @param array $data Data to map into query
     * @param array $format PDO data type formats
     *
     * @access public
     *
     * @return mixed Value.
     */
    public function query( $query, $data = null, $format = null ){
        ini_set('memory_limit','1024M');
        // error_log("DB::query q=".$query);
        if ( ! is_a( $query, 'PDOStatement' ) ) {
            $query = &$this->prepare( $query );
        }

        if( class_exists( 'LogitEventQuery' ) )
            $logEvent = new LogitEventQuery( 'query', $query->queryString . '<br />' . print_r( $data, true ) );

        if ( ! is_null( $data ) && ! empty( $data ) ) foreach ( $data AS $k => $v ) {
            $type = ( ! is_null( $format ) && ( $type = array_shift( $format ) ) ) ? $type : PDO::PARAM_STR;
            $query->bindValue( ( is_int( $k ) ? ++$k : ':' . $k ), $v, $type );
        }
		
        //error_log("Update Query - ".$query->queryString."<br />".print_r($data, true));
        error_log($query->queryString."\n\r");
        $query->execute();

        $i = 0;
        $data = array();

        $data = $query->fetchAll();

        $data = array_filter( $data );

        if ( preg_match( '/^\s*(create|alter|truncate|drop) /i', $query->queryString ) ) {
            $return_val = $data;
        } else if ( preg_match( '/^\s*(insert|replace) /i', $query->queryString ) ) {
            $return_val = self::$db->lastInsertId();
        } else if ( preg_match( '/^\s*(delete|update) /i', $query->queryString ) ) {
            $return_val =  $query->rowCount(); //$i--;
        } else {
            $return_val = $data;
        }

        if( isset( $logEvent ) ) $logEvent->finish();
        $query->closeCursor();
	unset($query);
        unset($logEvent);
        unset($data);
        unset($type);
        return $return_val;
    }

    /**
     * Execute SQL query and return single row
     * 
     * @param mixed $query SQL Statement or prepared PDOStatement object
     * @param array $data Data to map into query
     * @param array $format PDO data type formats
     *
     * @access public
     *
     * @return Object Data return
     */
    public function get_row( $query, $data = null, $format = null ){
        $data = $this->query( $query, $data, $format );
        if( is_array( $data ) && sizeof( $data ) > 0 ) return $data[0];
        unset($query);
        return $data;
    }

    /**
     * Execute SQL query and return a single column
     *
     * @param mixed $query SQL Statement or prepared PDOStatement object
     * @param array $data Data to map into query
     * @param array $format PDO data type formats
     * @param mixed $column Column name or number to retrieve
     *
     * @access public
     *
     * @return array Data return
     */
    public function get_col( $query, $data = null, $format = null, $col = 0 ){
        $data = $this->query( $query, $data, $format );
        $output = array();
        foreach( $data AS $row ){
            if( property_exists( $row, $col ) ){
                $output[] = $row->$col;
            }elseif( is_numeric( $col ) ){
                $vars = array_keys( get_object_vars( $row ) );
                $varname = $vars[ $col ];
                $output[] = $row->$varname;
            }
        }
        $query->closeCursor();
        unset($query);
        return $output;
    }

    /**
     * Execute SQL query and return a single var
     *
     * @param mixed $query SQL Statement or prepared PDOStatement object
     * @param array $data Data to map into query
     * @param array $format PDO data type formats
     * @param mixed $column Column name or number to retrieve
     *
     * @access public
     *
     * @return String Data return
     */
    public function get_var( $query, $data = null, $format = null, $col = 0 ){
        $row = $this->get_row( $query, $data, $format );
        $query->closeCursor();
        unset($query);
        if ($row){
            if( property_exists( $row, $col ) ){
                return $row->$col;
            }elseif( is_numeric( $col ) ){
            	/* OLD CODE 
    			 *  $vars = array_keys( get_object_vars( $row ) );
                	$varname = $vars[ $col ];
                	return $row->$varname;
	    		 */
            	if(is_object($row)){
        		    $vars = array_keys( get_object_vars( $row ) );
	                $varname = $vars[ $col ];
	                return $row->$varname;
	    		}
    
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * Insert data into table
     * 
     * @param String $table Name of table
     * @param array $data Data to insert
     * @param array $format PDO data type formats
     *
     * @access public
     *
     * @return int Last insert id
     */
    public function insert( $table, $data, $format = null, $ignore = false ){
		$fields = $value_placeholder = array_keys( $data );
		foreach ( $value_placeholder AS &$p ) {
		    $p = ':' . $p;
		}

		$query = "INSERT " . ( $ignore ? 'IGNORE ' : '' ) . "INTO `$table` (`" . implode( '`,`', $fields ) . '`) VALUES (' . implode( ',', $value_placeholder ) . ')';
                return $this->query( $query, $data, $format );
    }

    /**
     * Insert data into table or update on duplicate key
     * 
     * @param String $table Name of table
     * @param array $data Data to insert
     * @param array $update_data Data to update
     * @param array $format PDO data type formats for insert data
     * @param array $where_format PDO data type formats for update data
     *
     * @access public
     *
     * @return int Last insert id
     */
    public function insert_update( $table, $data, $update_data, $format = null, $where_format = null ){
		if ( ! is_array( $data ) || ! is_array( $update_data ) )
		    return false;
		
		$bits = $update_bits = array();
		foreach ( (array) array_keys( $data ) AS $field ) {
		    $bits[] = '?';
		}
		foreach ( (array) array_keys( $update_data ) As $field ) {
		    $update_bits[] = "`$field` = ?";
		}

		$query = "INSERT INTO `$table` (`" . implode( '`,`', array_keys( $data ) ) . '`) VALUES(' . implode( ',', $bits ) . ') ON DUPLICATE KEY UPDATE ' . implode( ', ', $update_bits );
		return $this->query( $query, array_merge( array_values( $data ), array_values( $update_data ) ), array_merge( array_values( $format ), array_values( $where_format ) ) );
    }

    /**
     * Update data in table
     * 
     * @param String $table Name of table
     * @param array $data Data to change
     * @param array $where Where condition to match data
     * @param array $format PDO data type formats for update
     * @param array $where_format PDO data type formats for where
     *
     * @access public
     *
     * @return int Number of records updated
     */
    public function update( $table, $data, $where, $format = array(), $where_format = array() ) {
		if ( ! is_array( $data ) || ! is_array( $where ) )
		    return false;

		$bits = $wheres = array();
		foreach ( (array) array_keys( $data ) AS $field ) {
		    $bits[] = "`$field` = ?";
		}
		foreach ( (array) array_keys( $where ) As $field ) {
		    $wheres[] = "`$field` = ?";
		}

		$query = "UPDATE `$table` SET " . implode( ', ', $bits ) . ' WHERE ' . implode( ' AND ', $wheres );
		return $this->query( $query, array_merge( array_values( $data ), array_values( $where ) ), array_merge( array_values( $format ), array_values( $where_format ) ) );
    }

    /**
     * Delete data from table
     * 
     * @param String $table Name of table
     * @param mixed $where Where condition to match data
     * @param mixed $where_format PDO data type formats for where
     *
     * @access public
     *
     * @return int Number of records deleted
     */
    public function delete( $table, $where, $where_format = array() ){
		if ( ! is_array( $where ) )
		    return false;

		$wheres = array();
		foreach ( (array) array_keys( $where ) AS $field ){
		    $wheres[] = "`$field` = ?";
		}

		$query = "DELETE FROM `$table` WHERE " . implode( ' AND ', $wheres );

		//error_log( "DB::delete $query where is " . $this->what_is( $where ) );
		return $this->query( $query, array_values( $where ), array_values( $where_format ) );
    }

    /**
     * Return type and contents of mixed variable
     * 
     * @param mixed $fing Variable to discover
     *
     * @access public
     *
     * @return String Text representation of variable
     */
    public function what_is( $fing ){
		if ( is_null( $fing ) ) return 'null';
		if ( is_string( $fing ) ) return 'string='.$fing;
		if ( is_array( $fing ) ){
		    $o = 'array{';
		    foreach ( $fing as $k => $v ) $o .= $k . '=' . $v . ', ';
		    $o .= '}';
		    return $o;
		}
		return 'unk';
    }

}