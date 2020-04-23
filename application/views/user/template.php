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
        <link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/fonts/font-googleapis.css'>
        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/ico/favicon.ico">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pluton.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/animate.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/product.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/template.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slider.css" />

    </head>

    <body>
        <div class='header'>
            <div class="row containerMenu" style="width: 100%">
                <div class="productColumn-3 productColumn-2-lg">
                    <a href="<?php echo site_url('user/C_home') ?>" class="brand">
                        <img src="<?php echo base_url(); ?>assets/images/Logo-BillyArloji.png" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                </div>
                <div class="productColumn-7 productColumn-8-lg">
                    <table id='billyTitle'>
                        <tr>
                            <th>BILLY ARLOJI</th>
                        </tr>
                        <tr>
                            <td>All Original Luxury Goods With The Best Conditions</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="navbar">
            <div class="row">
                <!-- Navigation button, visible on small resolution -->
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    MENU
                    <i class="icon-menu pull-right"></i>
                </button>
            </div>
            <div class="nav-collapse collapse row rowMenu">
                <!-- Main navigation -->
                <div class="colTemplate"></div>

                <a class="colTemplate navMenu active" href="<?php echo site_url('user/C_product') ?>">
                    <div>MEN</div>
                </a>
                <a class="colTemplate navMenu" href="#">
                    <div>LADIES</div>
                </a>
                <a class="colTemplate navMenu" href="#">
                    <div>COUPLE WATCH</div>
                </a>
                <a class="colTemplate navMenu" href="#">
                    <div>JEWELRY</div>
                </a>
                <a class="colTemplate navMenu" href="#">
                    <div>ACCESSORIES</div>
                </a>
                <a class="colTemplate navMenu" href="<?php echo site_url('user/C_productdetail') ?>">
                    <div>STRAP</div>
                </a>
                <a class="colTemplate navMenu" href="<?php echo site_url('user/C_about') ?>">
                    <div>WATCH BOX</div>
                </a>
                <div class="colTemplate"></div>
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

        <!-- To Top Button Start-->
        <button onclick="topFunction()" id="toTop" title="To Top"><i class="fa fa-caret-up"></i></button>
        <!-- To Top Button End -->



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
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/template.js"></script>
    </body>

</html>