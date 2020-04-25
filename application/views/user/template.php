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
                <button type="button" class="btn btn-navbar" data-toggle="modal" data-target="#nav-collapse-sm">
                    MENU
                </button>
            </div>
            <div class="nav-collapse collapse row rowMenu" id="rowMenu">
                <!-- Main navigation -->
                <div class="colTemplate"></div>

                <div class='dropdown colTemplate navMenu active'>
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <div>MEN</div>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('user/C_product') ?>">Alexander Christtie</a></li>
                            <li><a href="#">Casio</a></li>
                            <li><a href="#">Daniel Wellington</a></li>
                        </ul>
                    </a>
                </div>
                <div class='dropdown colTemplate navMenu'>
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <div>LADIES</div>
                        <ul class="dropdown-menu">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                        </ul>
                    </a>
                </div>
                <div class='dropdown colTemplate navMenu'>
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <div>COUPLE WATCH</div>
                        <ul class="dropdown-menu">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                        </ul>
                    </a>
                </div>
                <div class='dropdown colTemplate navMenu'>
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <div>JEWELRY</div>
                        <ul class="dropdown-menu">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                        </ul>
                    </a>
                </div>
                <div class='dropdown colTemplate navMenu'>
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <div>ACCESSORIES</div>
                        <ul class="dropdown-menu">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                        </ul>
                    </a>
                </div>
                <div class='dropdown colTemplate navMenu'>
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <div>STRAP</div>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('user/C_productdetail') ?>">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                        </ul>
                    </a>
                </div>
                <div class='dropdown colTemplate navMenu'>
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <div>WATCH BOX</div>
                        <ul class="dropdown-menu">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                        </ul>
                    </a>
                </div>
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

        <!-- Modal Fullscreen Start -->
        <div class="modal fade modal-fullscreen" id="nav-collapse-sm" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" data-dismiss="modal" aria-hidden="true">
                        <h4 class="modal-title" id="myModalLabel">
                            MENU
                        </h4>
                    </div>
                    <div class="modal-body row">
                        <div class="productColumn-3">
                            <div class="tab br-white">
                                <button class="tablinks" onclick="openCity(event, '1')" id="defaultOpen">MEN</button>
                                <button class="tablinks" onclick="openCity(event, '2')" id="defaultOpen">LADIES</button>
                                <button class="tablinks" onclick="openCity(event, '3')" id="defaultOpen">COUPLE
                                    WATCH</button>
                                <button class="tablinks" onclick="openCity(event, '3')"
                                    id="defaultOpen">JEWELRY</button>
                                <button class="tablinks" onclick="openCity(event, '5')"
                                    id="defaultOpen">ACCESSORIES</button>
                                <button class="tablinks" onclick="openCity(event, '6')" id="defaultOpen">STRAP</button>
                                <button class="tablinks" onclick="openCity(event, '7')" id="defaultOpen">WATCH
                                    BOX</button>
                            </div>
                        </div>
                        <div class="productColumn-6">
                            <?php for ($i=0; $i < 7 ; $i++) {  ?>
                            <div id="<?php echo $i+1 ?>" class="tabcontent">
                                <?php for ($j=0; $j < $i+1 ; $j++) {  ?>
                                <button>Sub City
                                    <?php echo $j+1 ?></button>
                                <?php } ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Fullscreen End -->

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

        <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("rowMenu");
        var menu = header.getElementsByClassName("navMenu");
        for (var i = 0; i < menu.length; i++) {
            menu[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
        </script>

        <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>

    </body>

</html>