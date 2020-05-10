<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/swiper.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slider.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pagination.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
<script src="https://apps.elfsight.com/p/platform.js" defer></script>

<div id="home">
    <!-- Start Slider section -->
    <div class='row ptb-1'>
        <div class="productColumn-10">
            <div class="swiper-container vertical-container">
                <div class="swiper-wrapper vertical-wrapper">
                    <?php if (count($slider) > 0) {
                        foreach ($slider as $row) { ?>
                            <div class="swiper-slide vertical-slide">
                                <img class='vertical-image' src="<?php echo base_url(); ?>upload/slider/<?php echo $row->images ?>" onerror="this.onerror=null;this.src='<?php echo base_url(); ?>upload/product/default.jpg';">
                                <div class="button-slider">
                                    <a href="<?php echo $row->link ?>" class="btn"><?php echo $row->description ?></a>
                                </div>
                            </div>
                    <?php }
                    } else {
                        echo ("<div class='swiper-slide vertical-slide'>
                        <img class='vertical-image'
                            src='upload/product/default.jpg'
                            onerror='this.onerror=null;this.src='upload/product/default.jpg';'>
                    </div>");
                    } ?>
                </div>
                <div class="swiper-pagination vertical-pagination"></div>
            </div>
        </div>
    </div>
    <!-- End Slider Section -->

    <!-- Start Product Section -->
    <div class='row home-product mtb-15 p-1'>
        <div class='row home-product-title'>
            <span class="brown-text">ALL</span>
            <span>PRODUCTS</span>
        </div>
        <div class="row">
            <ul class="thumbnails row mb-3">
                <?php
                if (count($product) > 0) {
                    foreach ($product as $row) { ?>
                        <li class="productColumn">
                            <div class="thumbnail">
                                <a href="<?php echo base_url(); ?>product_detail/<?php echo encrypt_url($row->id) ?>">
                                    <div class="productImage">
                                        <img src="<?php echo base_url(); ?>upload/product/<?php echo $row->images ?>" onerror="this.onerror=null;this.src='<?php echo base_url(); ?>upload/product/default.jpg';" alt="<?php echo $row->name ?>">
                                </a>
                            </div>
                            <div class="productTitle">
                                <div class="productName">
                                    <h5><?php echo $row->name_product ?></h5>
                                </div>
                                <div class="price">
                                    <h5>Rp.
                                        <?php if ($row->discount != 0) {
                                            $total = $row->price - $row->discount;
                                            echo number_format($total, 2, ',', '.');
                                        } else {
                                            echo number_format($row->price, 2, ',', '.');
                                        } ?></h5>
                                </div>
                                <?php if ($row->discount != 0) {
                                    echo "<div class='discount'>
                                        <h5>
                                        Rp. ", number_format($row->price, 2, ',', '.');
                                    "</h5>
                                    </div>";
                                } else {
                                    echo "<div class='discount' style='color: transparent'>
                                        <h5>-</h5>
                                    </div>";
                                } ?>
                            </div>
        </div>
        </li>
    <?php }
                } else { ?>
    <h3 style="color: white;">This product is not available</h3>
<?php } ?>
</ul>
    </div>
    <!-- Pagination -->
    <div id="pagination-container"></div>
</div>
<!-- End Product Section -->

<!-- Start Testimoni Section -->
<div class='row testimoni p-1'>
    <div class='row testimoni-title'>
        <span class="brown-text">TESTI</span>
        <span>MONI</span>
    </div>
    <div class='row testimoni-item'>
        <div class="swiper-container testimoni-container">
            <div data-swiper-parallax="-23%"></div>
            <div class="swiper-wrapper testimoni-wrapper">
                <?php foreach ($testimoni as $row) { ?>
                    <div class="swiper-slide testimoni-slide row">
                        <div class="icon"> <img src="<?php echo base_url(); ?>upload/testimoni/<?php echo $row->images ?>" onerror="this.onerror=null;this.src='<?php echo base_url(); ?>upload/testimoni/default.jpg';" width="100px" height="100px" alt="Testimoni" />
                        </div>
                        <div class="title brown-text" data-swiper-parallax="-300"><?php echo $row->title ?></div>
                        <div class="text" data-swiper-parallax="-100">
                            <?php echo $row->description ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-button-prev swiper-button-white testimoni-prev"></div>
            <div class="swiper-button-next swiper-button-white testimoni-next"></div>
        </div>
    </div>
</div>
<!-- End Testimoni Section -->

<!-- Start Feeds Section -->
<?php
if ($feed) { ?>
    <div class='row feeds mtb-15 p-1'>
        <div class='row feeds-title'>
            <span class="brown-text pr-03 float-right">INSTAGRAM</span>
            <span class="float-right">FEEDS</span>
        </div>
        <div class="elfsight-app-12d83ce8-847d-4e3f-bdc6-a2521bb4c405">

        </div>
    </div>
<?php }
?>
<!-- End Feeds Section -->

<!-- Start Footer Section -->
<div class='row footer mt-15'>
    <div class='productColumn-equal-lg productColumn-5-md productColumn-10'>
        <div class="row footer-title">
            <span class="brown-text pr-03 float-right">ABOUT</span>
            <span class="float-right">US</span>
        </div>
        <div class='row p-1 footer-content'><?php echo $about->description ?></div>
    </div>
    <div class='productColumn-equal-lg productColumn-5-md productColumn-10'>
        <div class="row footer-title">
            <span class="brown-text pr-03 float-right">OUR</span>
            <span class="float-right">STORE</span>
        </div>
        <div class='row p-1 footer-content'><?php echo $store->description ?></div>
    </div>
    <div class='productColumn-equal-lg productColumn-5-md productColumn-10'>
        <div class="row footer-title">
            <span class="brown-text pr-03 float-left">HOW</span>
            <span class="float-left">TO BUY</span>
        </div>
        <div class='row p-1 footer-content'><?php echo $buy->description ?></div>
    </div>
    <div class='productColumn-equal-lg productColumn-5-md productColumn-10'>
        <div class="row footer-title">
            <span class="brown-text pr-03 float-left">SOCIAL</span>
            <span class="float-left">MEDIA</span>
        </div>
        <div class='p-1 footer-content' style='text-align: left;'>
            <?php foreach ($social as $row) {
                if ($row->id > 3) {
                    $soc = strtolower($row->title);
                    if ($soc == 'instagram') {
                        echo "<a style='color:white;' href='" . $row->link . "' target='_blank'><i class='fa fa-instagram' aria-hidden='true'></i> " . $row->description . "</a>";
                    } else if ($soc == 'facebook') {
                        echo "<a style='color:white;' href='" . $row->link . "' target='_blank'><i class='fa fa-facebook' aria-hidden='true'></i> " . $row->description . "</a>";
                    } else if ($soc == 'twitter') {
                        echo  "<a style='color:white;' href='" . $row->link . "' target='_blank'><i class='fa fa-twitter' aria-hidden='true'></i> " . $row->description . "</a>";
                    } else {
                        echo  "<a style='color:white;' href='" . $row->link . "' target='_blank'>" . $row->description . "</a>";
                    }
                    echo "<br>";
                }
            } ?>
        </div>
    </div>
</div>
<!-- End Footer Section -->
</div>

<script src="<?php echo base_url(); ?>assets/js/swiper.js"></script>
<script src="<?php echo base_url(); ?>assets/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.simplePagination.js"></script>

<script>
    // Pagination
    var items = $(".thumbnails .productColumn");
    var numItems = items.length;
    var perPage;

    if (screen.width < 768) {
        perPage = 4;
    } else if (screen.width >= 768 && screen.width < 1024) {
        perPage = 8;
    } else {
        perPage = 10;
    }

    var totalPages = Math.ceil(numItems / perPage);

    items.slice(perPage).hide();

    if (totalPages > 1) {
        $('#pagination-container').pagination({
            items: numItems,
            itemsOnPage: perPage,
            prevText: "&laquo;",
            nextText: "&raquo;",
            onPageClick: function(pageNumber) {
                var showFrom = perPage * (pageNumber - 1);
                var showTo = showFrom + perPage;
                items.hide().slice(showFrom, showTo).show();
                $('html, body').animate({
                    scrollTop: $(".home-product").offset().top
                }, 500);
            }
        });
    }
</script>

<script>
    // Vertical Swiper JS
    var verticalSwiper = new Swiper('.swiper-container.vertical-container', {
        direction: 'vertical',
        loop: true,
        mousewheel: true,
        pagination: {
            el: '.swiper-pagination.vertical-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
    });

    // Testimoni Swiper JS
    var testimoniSwiper = new Swiper('.swiper-container.testimoni-container', {
        speed: 600,
        parallax: true,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
    });

    // Instagram Feeds Swiper JS
    var feedsSwiper = new Swiper('.swiper-container.feeds-container', {
        slidesPerView: 4,
        spaceBetween: 10,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
    });
</script>