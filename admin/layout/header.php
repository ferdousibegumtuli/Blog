<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        session_start();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <?php
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http';
    $hostName = $_SERVER['SERVER_NAME'];
    $projectFolder = 'Blog';
    $baseUrl = $protocol .'://'. $hostName .'/'. $projectFolder;
    $rootPath = $_SERVER['DOCUMENT_ROOT'].'/'. $projectFolder;
    ?>
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/public/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/public/assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/public/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/public/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/public/assets/css/app.css">
    <link rel="shortcut icon" href="<?php echo $baseUrl ?>/public/assets/images/favicon.svg" type="image/x-icon">

</head>

<body>
    <div id="app">

       
