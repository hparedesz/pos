<!DOCTYPE html>
<html>
<head lang="es">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>POS - Bebidas Express</title>

    <link href="<?php echo base_url();?>/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="<?php echo base_url();?>/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="<?php echo base_url();?>/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="<?php echo base_url();?>/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="<?php echo base_url();?>/img/favicon.png" rel="icon" type="image/png">
    <link href="<?php echo base_url();?>/img/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="<?php echo base_url();?>/css/lib/bootstrap-sweetalert/sweetalert.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/css/separate/vendor/sweet-alert-animations.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/css/lib/datatables-net/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/css/separate/vendor/datatables-net.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/css/main.css">
</head>
<body class="with-side-menu ">
    <header class="site-header">
        <div class="container-fluid">

            <a href="#" class="site-logo">
                <img class="hidden-md-down" src="<?php echo base_url();?>/img/logo-2.png" alt="">
                <img class="hidden-lg-up" src="<?php echo base_url();?>/img/logo-2-mob.png" alt="">
            </a>

            <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
                <span>toggle menu</span>
            </button>

            <button class="hamburger hamburger--htla">
                <span>toggle menu</span>
            </button>
            <div class="site-header-content">
                <div class="site-header-content-in">
                    <div class="site-header-shown">
                        <div class="dropdown user-menu">
                            <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo base_url();?>/img/avatar-2-64.png" alt="">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                                <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Profile</a>
                                <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
                                <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Help</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--site-header-content-in-->
            </div>
            <!--.site-header-content-->
        </div>
        <!--.container-fluid-->
    </header>
    <!--.site-header-->