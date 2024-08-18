<!DOCTYPE html>
<?php
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http';
    $hostName = $_SERVER['SERVER_NAME'];
    $projectFolder = 'Blog';
    $baseUrl = $protocol .'://'. $hostName .'/'. $projectFolder;
    $rootPath = $_SERVER['DOCUMENT_ROOT'].'/'. $projectFolder;
require($rootPath . '/controller/categoryController.php');
$getAllFromDb = new CategoryController();
$categories = $getAllFromDb->index();
?>
<html lang="en" class="js svg audio canvas canvastext video cssgradients multiplebgs opacity rgba inlinesvg hsla supports svgclippaths fontface generatedcontent textshadow cssanimations backgroundsize borderimage borderradius boxshadow csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside flexbox cssreflections csstransforms csstransforms3d csstransitions" style="">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>24 News — Free Website Template, Free HTML5 Template by FreeHTML5.co</title>
    <link href="<?php echo $baseUrl ?>/frontendAssets/css/media_query.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $baseUrl ?>/frontendAssets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="<?php echo $baseUrl ?>/frontendAssets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="<?php echo $baseUrl ?>/frontendAssets/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $baseUrl ?>/frontendAssets/css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link href="<?php echo $baseUrl ?>/frontendAssets/css/style_1.css" rel="stylesheet" type="text/css">
    <!-- Modernizr JS -->
    <script src="<?php echo $baseUrl ?>/frontendAssets/js/modernizr-3.5.0.min.js"></script>
</head>
<body>
<div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://twitter.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://fb.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
                </div>
                <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->
                <div class="d-inline-block text-center dd_position_relative ">
                    <select class="form-control fh5co_text_select_option">
                        <option>English </option>
                        <option>French </option>
                        <option>German </option>
                        <option>Spanish </option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div style="text-align:right;">
    <a href="<?php echo $baseUrl ?>/login" class="btn btn-outline-warning">Sign In</a>
    </div>

</div>
