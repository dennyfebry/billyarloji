<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Start Slider section -->
<div id="home">
    <!-- Start cSlider -->
    <div id="da-slider" class="da-slider">
        <div class="triangle"></div>
        <div class="mask"></div>
        <div class="container">
            <div class="da-slide">
                <h2 class="fittext2">Welcome to Billy Arloji</h2>
                <h4>Clean & responsive</h4>
                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                    skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of
                    her own road, the Line Lane.</p>
                <a href="#" class="da-link button">Read more</a>
                <div class="da-img">
                    <img src="<?php echo base_url(); ?>assets/images/Slider01.png" alt="image01" width="320">
                </div>
            </div>
            <div class="da-slide">
                <h2>Easy management</h2>
                <h4>Easy to use</h4>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                    there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                    Semantics, a large language ocean.</p>
                <a href="#" class="da-link button">Read more</a>
                <div class="da-img">
                    <img src="<?php echo base_url(); ?>assets/images/Slider02.png" width="320" alt="image02">
                </div>
            </div>
            <div class="da-slide">
                <h2>Revolution</h2>
                <h4>Customizable</h4>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                    It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <a href="#" class="da-link button">Read more</a>
                <div class="da-img">
                    <img src="<?php echo base_url(); ?>assets/images/Slider03.png" width="320" alt="image03">
                </div>
            </div>

            <!-- Start cSlide navigation arrows -->
            <div class="da-arrows">
                <span class="da-arrows-prev"></span>
                <span class="da-arrows-next"></span>
            </div>
            <!-- End cSlide navigation arrows -->
        </div>
    </div>
</div>
<!-- End Slider section -->

<div class="section secondary-section " id="portfolio">
    <div class="triangle"></div>
    <div class="container">
        <div class=" title">
            <h1>Have You Seen our Works?</h1>
            <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.
            </p>
        </div>
        <ul class="nav nav-pills">
            <li class="filter" data-filter="all">
                <a href="#noAction">All</a>
            </li>
            <li class="filter" data-filter="web">
                <a href="#noAction">Web</a>
            </li>
            <li class="filter" data-filter="photo">
                <a href="#noAction">Photo</a>
            </li>
            <li class="filter" data-filter="identity">
                <a href="#noAction">Identity</a>
            </li>
        </ul>
        <!-- Start details for portfolio project 1 -->
        <div id="single-project">

            <!-- Product Detail -->
            <?php
        include 'product-detail.php';
        ?>

            <!-- Product Cards -->
            <ul id="portfolio-grid" class="thumbnails row">
                <?php for ($i=0; $i < 5; $i++): ?>
                <li class="span4 mix web">
                    <div class="thumbnail">
                        <img src="<?php echo base_url(); ?>assets/images/Portfolio01.png" alt="project 1">
                        <a href="#single-project" class="more show_hide" rel="#slidingDiv<?php echo $i;?>">
                            <!-- <i class="icon-plus"></i> -->
                            <button>See Detail</button>
                        </a>
                        <h3>Alvin <?= $i?> label </h3>
                        <p>Thumbnail caption...</p>
                        <div class="mask"></div>
                    </div>
                </li>
                <?php endfor; ?>

                <?php for ($i=5; $i < 10; $i++): ?>
                <li class="span4 mix photo">
                    <div class="thumbnail">
                        <img src="<?php echo base_url(); ?>assets/images/Portfolio01.png" alt="project 1">
                        <a href="#single-project" class="more show_hide" rel="#slidingDiv<?php echo $i;?>">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>Goblin <?= $i?> label </h3>
                        <p>Thumbnail caption...</p>
                        <div class="mask"></div>
                    </div>
                </li>
                <?php endfor; ?>

                <?php for ($i=10; $i < 15; $i++): ?>
                <li class="span4 mix identity">
                    <div class="thumbnail">
                        <img src="<?php echo base_url(); ?>assets/images/Portfolio01.png" alt="project 1">
                        <a href="#single-project" class="more show_hide" rel="#slidingDiv<?php echo $i;?>">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>Jomi <?= $i?> label </h3>
                        <p>Thumbnail caption...</p>
                        <div class="mask"></div>
                    </div>
                </li>
                <?php endfor; ?>

            </ul>
        </div>
    </div>
</div>
<!-- Portfolio section end -->