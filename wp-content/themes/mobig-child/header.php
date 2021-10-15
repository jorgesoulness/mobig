<?php
//Eliminar cuando se integre en FrameWork o CMS
require_once('functions.php');
?>
<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Maqueta Master | <?php echo TituloSecciones(); ?></title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="<?php get_template_directory_uri(''); ?>humnas.txt">
        <meta name="robots" content="index, follow">
	      <link rel="alternate" hreflang="es-mx" href="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(''); ?>favicon.ico">
		    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(''); ?>favicon.ico">
		    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(''); ?>favicon.ico">

        <!-- S T Y L E S - G E N E R A L -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(''); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(''); ?>assets/css/style.min.css?ver=<?php echo rand(); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(''); ?>assets/css/vendor/animate.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(''); ?>assets/css/vendor/hover-min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(''); ?>assets/css/nprogress.css">
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>

        <script>var siteURL = '<?php echo get_site_url(); ?>';</script>

    </head>
    <body style="display: none;">
    
        <header id="headerGeneral" class="g-header">

        </header><!-- end.Header -->

        <main>
          <div id="primary" class="content-area">
        