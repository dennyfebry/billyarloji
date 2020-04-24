<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/swiper.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slider.css" />

<div id="home">
    <!-- Start Slider section -->
    <div class='row p-1'>
        <div class='productColumn-0 productColumn-05-md productColumn-05-lg'></div>
        <div class="productColumn-10 productColumn-9-md productColumn-9-lg">
            <div class="swiper-container vertical-container">
                <div class="swiper-wrapper vertical-wrapper">
                    <?php for ($i=0; $i <10 ; $i++) { ?>
                    <div class="swiper-slide vertical-slide">
                        <img class='vertical-image' src="<?php echo base_url(); ?>upload/product/1.jpg">
                    </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class='productColumn-0 productColumn-05-md productColumn-05-lg'></div>
    </div>
    <!-- End Slider Section -->

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
                    <?php for ($i=0; $i <10 ; $i++) { ?>
                    <div class="swiper-slide testimoni-slide row">
                        <div class="title brown-text" data-swiper-parallax="-300">Testimoni <?php echo $i+1 ?></div>
                        <div class="text" data-swiper-parallax="-100">
                            <p> &#65282;Barang mantab, pengiriman oke, tokcer deh! Barang mantab, pengiriman oke,
                                tokcer deh! Barang mantab, pengiriman oke, tokcer deh!
                                &#65282;</p>
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
    <div class='row feeds mtb-15 p-1'>
        <div class='row feeds-title'>
            <span class="brown-text pr-03 float-right">INSTAGRAM</span>
            <span class="float-right">FEEDS</span>
        </div>
        <div class='row feeds-item'>
            <!-- <div class="row"> -->
            <div class="swiper-container feeds-container">
                <div class="swiper-wrapper feeds-wrapper">
                    <?php for ($i=0; $i <10 ; $i++) { ?>
                    <div class="swiper-slide feeds-slide">
                        <img class='feeds-image' src="<?php echo base_url(); ?>upload/product/2.jpg">
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
    <!-- End Feeds Section -->

    <!-- Start Footer Section -->
    <div class='row footer mt-15'>
        <div class='productColumn-equal-lg productColumn-5-md productColumn-10'>
            <div class="row footer-title">
                <span class="brown-text pr-03 float-right">ABOUT</span>
                <span class="float-right">US</span>
            </div>
            <div class='row p-1' style='height: 100px'></div>
        </div>
        <div class='productColumn-equal-lg productColumn-5-md productColumn-10'>
            <div class="row footer-title">
                <span class="brown-text pr-03 float-right">OUR</span>
                <span class="float-right">STORE</span>
            </div>
            <div class='row p-1' style='height: 100px'></div>
        </div>
        <div class='productColumn-equal-lg productColumn-5-md productColumn-10'>
            <div class="row footer-title">
                <span class="brown-text pr-03 float-left">HOW</span>
                <span class="float-left">TO BUY</span>
            </div>
            <div class='row p-1' style='height: 100px'></div>
        </div>
        <div class='productColumn-equal-lg productColumn-5-md productColumn-10'>
            <div class="row footer-title">
                <span class="brown-text pr-03 float-left">SOCIAL</span>
                <span class="float-left">MEDIA</span>
            </div>
            <div class='row p-1' style='height: 100px'></div>
        </div>
    </div>
    <!-- End Footer Section -->
</div>

<script src="<?php echo base_url(); ?>assets/js/swiper.js"></script>
<script src="<?php echo base_url(); ?>assets/js/swiper.min.js"></script>

<script>
// Vertical Swiper JS
var verticalSwiper = new Swiper('.swiper-container.vertical-container', {
    direction: 'vertical',
    loop: true,
    pagination: {
        el: '.swiper-pagination',
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
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
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