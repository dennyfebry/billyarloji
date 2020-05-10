<?php
defined('BASEPATH') or exit('No direct script access allowed');
$menu = $this->ctg->getMenu();
$productAutoComplete = $this->prd->getProductAutoComplete();
$backgroundImageUrl = base_url().'upload/'.$backgroundImage;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titlepage ?></title>
    <!-- Load Roboto font -->
    <link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/fonts/font-googleapis.css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/content/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
</head>

<body style="background-image: url('<?php echo $backgroundImageUrl; ?>')">
    <div id="main">
        <div class="background-mask" id="background-mask"></div>
        <div class='header row'>
            <div class="row containerMenu" style="width: 100%">
                <div class="productColumn-10 productColumn-10-md productColumn-7-lg">
                    <a href="<?php echo site_url('home') ?>" class="brand">
                        <img src="<?php echo base_url(); ?>assets/images/logo.png" onerror="this.onerror=null;this.src='<?php echo base_url(); ?>upload/product/default.jpg';" alt="Logo" />
                    </a>
                </div>
                <div class="productColumn-10 productColumn-10-md productColumn-3-lg search-sm">
                    <div class="row">
                        <div class="productColumn-1 productColumn-1-md sidemenu-sm">
                            <span class="fa fa-bars sidemenu-icon" onclick="openNav()"></span>
                        </div>
                        <div class="productColumn-9 productColumn-9-md productColumn-10-lg form-group has-search autocomplete">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control" id="searchProduct" name="searchProduct" placeholder="Cari Produk ...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar" id="navbar">
            <div class="nav-collapse collapse row rowMenu" id="rowMenu">
                <!-- Main navigation -->
                <div class="colTemplate"></div>
                <?php
                foreach ($menu as $row) {
                    if (isset($category)) {
                        if ($category == $row->category) { ?>
                            <div class='dropdown colTemplate navMenu active'>
                            <?php } else { ?>
                                <div class='dropdown colTemplate navMenu'>
                                <?php }
                        } else { ?>
                                <div class='dropdown colTemplate navMenu'>
                                <?php } ?>
                                <a class="dropdown-toggle" href="" data-toggle="dropdown">
                                    <a href="<?php echo base_url(); ?>menu/<?php echo  encrypt_url($row->id); ?>"><?php echo $row->category; ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php $brand = $this->brn->getBrand($row->id);
                                        foreach ($brand as $brands) { ?>
                                            <li><a href="<?php echo base_url(); ?>product/<?php echo encrypt_url($row->id); ?>/<?php echo  encrypt_url($brands->id); ?>"><?php echo $brands->brand; ?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </a>
                                </div>
                            <?php } ?>
                            <div class="colTemplate"></div>
                            <!-- End main navigation -->
                                </div>
                            </div>

                            <!-- Content Start -->
                            <div class="content">
                                <?php include $page . '.php'; ?>
                            </div>
                            <!-- Content End -->

                            <!-- To Top Button Start-->
                            <button onclick="topFunction()" id="toTop" title="To Top"><i class="fa fa-caret-up"></i></button>
                            <!-- To Top Button End -->

                            <!-- Sidemenu Parent Start -->
                            <div id="mySidenav" class="sidenav">
                                <div class="productColumn-10 sidenav-child-title" onclick="closeNav()">
                                    MENU
                                </div>
                                <div id="sidenav-parent">
                                    <?php
                                    foreach ($menu as $row) {
                                        $childId = 'mySidenav-child-' . $row->id;
                                        $brand = $this->brn->getBrand($row->id);
                                        if (count($brand) > 0) { ?>
                                            <a class="tablinks" onclick="openNavChild('<?php echo $childId; ?>')">
                                                <?php echo $row->category; ?>
                                            </a>
                                            <!-- Sidemenu Child Start -->
                                            <div id="<?php echo $childId; ?>" class="sidenav-child">
                                                <div class="productColumn-10 sidenav-child-title" onclick="closeNavChild('<?php echo $childId; ?>')">
                                                    <?php echo $row->category; ?>
                                                </div>
                                                <div>
                                                    <a href="<?php echo base_url(); ?>menu/<?php echo  encrypt_url($row->id); ?>">
                                                        ALL <?php echo $row->category; ?>
                                                    </a>
                                                    <?php foreach ($brand as $brandMenu) { ?>
                                                        <a href="<?php echo base_url(); ?>product/<?php echo encrypt_url($row->id); ?>/<?php echo  encrypt_url($brandMenu->id); ?>">
                                                            <?php echo $brandMenu->brand; ?>
                                                        </a>
                                                    <?php }
                                                    ?>
                                                </div>
                                            </div>
                                            <!-- Sidemenu Child End -->
                                        <?php } else { ?>
                                            <a class="tablinks" href="<?php echo base_url(); ?>menu/<?php echo  encrypt_url($row->id); ?>">
                                                <?php echo $row->category; ?>
                                            </a>
                                    <?php }
                                    } ?>
                                </div>
                            </div>
                            <!-- Sidemenu Parent End -->
            </div>

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
                $('.background-mask').height($(document).height());
                // Active Menu CSS
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

            <script type="text/javascript">
                // Search Autocomplete
                var data = <?php echo json_encode($productAutoComplete); ?>;
                var productList = [];
                data.forEach(product => {
                    productList.push(product.searchProduct);
                });

                function autocomplete(inp, arr) {
                    var currentFocus;
                    inp.addEventListener("input", function(e) {
                        var a, b, i, val = this.value;
                        closeAllLists();
                        if (!val) {
                            return false;
                        }
                        currentFocus = -1;
                        a = document.createElement("DIV");
                        a.setAttribute("id", this.id + "autocomplete-list");
                        a.setAttribute("class", "autocomplete-items");
                        this.parentNode.appendChild(a);

                        arr.filter(function(search) {
                            return ~search.toLowerCase().indexOf(inp.value.toLowerCase());
                        }).map(function(search) {
                            b = document.createElement("DIV");
                            b.innerHTML = search;
                            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                            b.addEventListener("click", function(e) {
                                inp.value = search
                                closeAllLists();
                                location.href =
                                    "<?php echo base_url(); ?>user/C_product/search/" +
                                    inp.value;
                            });
                            a.appendChild(b);
                        })
                    });
                    inp.addEventListener("keydown", function(e) {
                        var x = document.getElementById(this.id + "autocomplete-list");
                        if (x) x = x.getElementsByTagName("div");
                        if (e.keyCode == 40) {
                            currentFocus++;
                            addActive(x);
                        } else if (e.keyCode == 38) {
                            currentFocus--;
                            addActive(x);
                        } else if (e.keyCode == 13) {
                            e.preventDefault();
                            if (currentFocus > -1) {
                                if (x) x[currentFocus].click();
                            }
                            location.href = "<?php echo base_url(); ?>user/C_product/search/" + inp.value;
                        }
                    });

                    function addActive(x) {
                        if (!x) return false;
                        removeActive(x);
                        if (currentFocus >= x.length) currentFocus = 0;
                        if (currentFocus < 0) currentFocus = (x.length - 1);
                        x[currentFocus].classList.add("autocomplete-active");
                    }

                    function removeActive(x) {
                        for (var i = 0; i < x.length; i++) {
                            x[i].classList.remove("autocomplete-active");
                        }
                    }

                    function closeAllLists(elmnt) {
                        var x = document.getElementsByClassName("autocomplete-items");
                        for (var i = 0; i < x.length; i++) {
                            if (elmnt != x[i] && elmnt != inp) {
                                x[i].parentNode.removeChild(x[i]);
                            }
                        }
                    }
                    document.addEventListener("click", function(e) {
                        closeAllLists(e.target);
                    });
                }
                autocomplete(document.getElementById("searchProduct"), productList);
            </script>

            <script>
                function openNav() {
                    document.body.style.position = "fixed";
                    document.getElementById("mySidenav").style.width = "75vw";
                    document.getElementById("main").style.marginLeft = "75vw";
                    document.getElementById("main").style.position = "absolute";
                    document.getElementById("background-mask").style.zIndex = 999;
                }

                function closeNav() {
                    document.body.style.position = "relative";
                    document.getElementById("mySidenav").style.width = "0";
                    document.getElementById("main").style.marginLeft = "0";
                    document.getElementById("main").style.position = "relative";
                    document.getElementById("background-mask").style.zIndex = -99;
                }

                function openNavChild(childId) {
                    document.getElementById(childId).style.width = "75vw";
                    document.getElementById(childId).style.marginRight = "25vw";
                }

                function closeNavChild(childId) {
                    document.getElementById(childId).style.width = "0";
                }
            </script>

            <script type="text/javascript">
                function is_touch_enabled() {
                    return ('ontouchstart' in window) ||
                        (navigator.maxTouchPoints > 0) ||
                        (navigator.msMaxTouchPoints > 0);
                }

                var src =
                    "https://contribute.geeksforgeeks.org/wp-content/uploads/gfg-39.png";

                if (is_touch_enabled()) {
                    document.getElementById('navbar').style.display = "none"
                }
            </script>
</body>

</html>