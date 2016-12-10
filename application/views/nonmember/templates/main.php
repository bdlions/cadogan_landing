<!DOCTYPE html>
<html lang="en" class="js no-flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="cadoganmcqueen">
        <meta name="author" content="Nazmul Hasan, Alamgir Kabir">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="og:site_name" content="cadoganmcqueen" />
        <meta name="og:title" content="cadoganmcqueen" />
        <meta name="og:description" content="soport website" />	
        <meta name="keywords" content=""/>
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>resources/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>resources/css/styles.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>resources/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>resources/css/cadogan-front-page.css">
        <script type="text/javascript" src="<?php echo base_url() ?>resources/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>resources/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>resources/js/jquery.lavalamp.min.js"></script>
        <title><?php echo SITE_TITLE ?></title>
        <script type="text/javascript">
            $(document).ready(function () {
                $('li.current-menu-item').first().addClass('current');
            });
            $(function () {
                $("ul#menu-main-menu").lavaLamp({
                    speed: 500
                });
            });
            $(document).ready(function () {
                $('.carousel').carousel({interval: 7000});
            });
        </script>
    </head>
    <body class="home">
        <!--<div class="container">-->
        <div class="row form-group">
            <div class="col-md-12">
                <?php $this->load->view('nonmember/templates/sections/header'); ?>
                <?php echo $contents; ?>
                <?php $this->load->view('nonmember/templates/sections/footer'); ?>
            </div>
        </div>
        <!--</div>-->        
    </body>

</html>