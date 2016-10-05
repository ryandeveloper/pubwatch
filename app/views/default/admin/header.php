<?php $userinfo = View::userInfo(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo View::url('assets/images/logo-s.png'); ?>" type="image/png" sizes="16x16"> 
    <title><?php echo View::$title . ' | '. Configuration::sitetitle; ?></title>
    <?php View::headers(); ?>
</head>
<body class="<?php echo View::$bodyclass; ?>">
    <?php View::template('settingsPane'); ?>

    <div class="page-container">

    <?php View::sidebar(); ?>

        <!-- Main Content -->
        <div class="main-content">

        <?php View::template('top'); ?>