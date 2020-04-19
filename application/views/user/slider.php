<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div>
    <div class="slider-wrapper">
        <div class="slider-border">
            <?php for ($i=1; $i <= 5; $i++): ?>
            <div class="mySlides">
                <div class="numbertext"><?php echo $i; ?> / 5</div>
                <img src="<?php echo base_url(); ?>assets/images/products/jam.jpg" style="width:100%">
            </div>
            <?php endfor; ?>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

        <div class="slider-row">
            <?php for ($i=1; $i <= 5; $i++): ?>
            <div class="slider-column">
                <img class="demo cursor" src="<?php echo base_url(); ?>assets/images/products/jam.jpg"
                    style="width:100%" onclick="currentSlide(<?php echo $i ?>);" alt="Product">
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slider.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slider.js"></script>