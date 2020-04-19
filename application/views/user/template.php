<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Billy Arloji</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext'
            rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/ico/favicon.ico">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Include javascript -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.custom.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.cslider.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.inview.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js"></script>
    </head>

    <body>
        <div class="navbar">
            <div class="row containerMenu">
                <div class="col">
                    <a href="<?php echo site_url('user/c_home') ?>" class="brand">
                        <img src="<?php echo base_url(); ?>assets/images/Logo-BillyArloji.png" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                </div>
            </div>
            <div class="row">
                <!-- Navigation button, visible on small resolution -->
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    MENU
                    <i class="icon-menu pull-right"></i>
                </button>
            </div>
            <div class="nav-collapse collapse row rowMenu">
                <!-- Main navigation -->

                <a class="colMenu active" href="<?php echo site_url('user/c_product') ?>">
                    <div>MEN</div>
                </a>

                <a class="colMenu" href="#">
                    <div>LADIES</div>
                </a>
                <a class="colMenu" href="#">
                    <div>COUPLE WATCH</div>
                </a>
                <a class="colMenu" href="#">
                    <div>JEWELRY</div>
                </a>
                <a class="colMenu" href="#">
                    <div>ACCESSORIES</div>
                </a>
                <a class="colMenu" href="<?php echo site_url('user/c_productdetail') ?>">
                    <div>STRAP</div>
                </a>
                <a class="colMenu" href="<?php echo site_url('user/c_about') ?>">
                    <div>WATCH BOX</div>
                </a>
                <!-- End main navigation -->
            </div>
        </div>

        <!-- Content Start -->
        <div class="content">
            <?php
        include $page.'.php';
        ?>
        </div>
        <!-- Content End -->

        <style>
        body,
        .container {
            background-color: #131313;
        }

        .containerMenu {
            padding: 0.5em;
        }

        .secondary-section,
        .primary-section,
        .containerMenu {
            background: #131313;
        }

        .section .container {
            padding-top: 30px
        }

        .navbar {
            background: #131313;
        }

        .navbar .brand img {
            width: 100px;
            height: 100px;
        }

        .navbar .brand {
            padding: 0;
        }

        .navbar .btn-navbar,
        .navbar .btn-navbar:hover,
        .navbar .btn:focus {
            width: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            font-size: 17px;
            line-height: 20px;
            background: #e7bd70;
            border: none;
            color: #000000;
            outline: none;
        }

        .row.rowMenu {
            margin-left: 0
        }

        .rowMenu {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            background-color: #e7bd70;
            text-align: center;
            opacity: 0.9;
        }

        .rowMenu>.colMenu {
            display: flex;
            flex-direction: column;
            flex-basis: 100%;
            padding: 0.5em 0;
            font-weight: bold
        }

        .colMenu:focus {
            color: #000000;
            text-decoration: none;
        }

        .colMenu {
            border-bottom: none;
        }

        .colMenu:hover,
        .colMenu.active {
            background-color: #ffffff;
            color: #000000;
        }

        @media screen and (min-width: 768px) {
            .rowMenu>.colMenu {
                flex: 1;
                padding: 1em 0 0.5em;
            }

            .rowMenu {
                background-color: #e7bd70;
                opacity: 1
            }

            .colMenu {
                border-bottom: 10px solid #e7bd70;
            }

            .colMenu:hover,
            .colMenu.active {
                background-color: #e7bd70;
                border-bottom: 10px solid #ffffff;
                color: #ffffff;
            }

            .containerMenu {
                padding: 1em;
                margin-left: 0;
            }
        }
        </style>
    </body>

</html>