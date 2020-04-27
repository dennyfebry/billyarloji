<?php
defined('BASEPATH') or exit('No direct script access allowed');
$menu = $this->ctg->getMenu();
$productAutoComplete = $this->prd->getProductAutoComplete();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titlepage ?></title>
    <!-- Load Roboto font -->
    <link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/fonts/font-googleapis.css'>
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

<body>
    <div class='header row'>
        <div class="row containerMenu" style="width: 100%">
            <div class="productColumn-3 productColumn-2-lg">
                <a href="<?php echo site_url('home') ?>" class="brand">
                    <img src="<?php echo base_url(); ?>assets/images/Logo-BillyArloji.png" onerror="this.onerror=null;this.src='<?php echo base_url(); ?>upload/product/default.jpg';" alt="Logo" />
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
        <div class="row containerMenu" style="width: 100%">
            <form class="search" autocomplete="off">
                <div class="autocomplete">
                    <input id="searchProduct" type="text" name="searchProduct" placeholder="Product Name ... ">
                </div>
            </form>
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
            <?php foreach ($menu as $row) {
                if ($category == $row->category) { ?>
                    <div class='dropdown colTemplate navMenu active'>
                    <?php } else { ?>
                        <div class='dropdown colTemplate navMenu'>
                        <?php } ?>
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <div><?php echo $row->category; ?></div>
                            <ul class="dropdown-menu">
                                <?php $brand = $this->brn->getBrand($row->id);
                                foreach ($brand as $brands) { ?>
                                    <li><a href="<?php echo base_url(); ?>product/<?php echo $row->id; ?>/<?php echo $brands->id; ?>"><?php echo $brands->brand; ?></a>
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
            <?php
            include $page . '.php';
            ?>
        </div>
        <!-- Content End -->

        <!-- To Top Button Start-->
        <button onclick="topFunction()" id="toTop" title="To Top"><i class="fa fa-caret-up"></i></button>
        <!-- To Top Button End -->

        <!-- Modal Fullscreen Start -->
        <div class="modal fade modal-fullscreen" id="nav-collapse-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                <?php
                                foreach ($menu as $row) { ?>
                                    <button class="tablinks" onclick="openCity(event, '<?= $row->id ?>')" id="defaultOpen"><?php echo $row->category; ?></button>
                                <?php
                                } ?>
                            </div>
                        </div>
                        <div class="productColumn-6">
                            <?php foreach ($menu as $row) { ?>
                                <div id="<?= $row->id ?>" class="tabcontent">
                                    <?php $brand = $this->brn->getBrand($row->id);
                                    foreach ($brand as $brands) { ?>
                                        <button onclick="location.href='<?php echo base_url(); ?>user/C_product/product/<?php echo $row->id; ?>/<?php echo $brands->id; ?>'"><?php echo $brands->brand; ?></button>
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
        <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/search-autocomplete.js"></script> -->

        <script>
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

        <script>
            // Mobile Menu Tabs
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

            document.getElementById("defaultOpen").click();
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
</body>

</html>