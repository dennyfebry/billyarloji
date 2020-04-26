<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slider.css" />

<?php $j = 1; ?>
<div>
    <div class="slider-wrapper">
        <div class="slider-border">
            <?php if ($row->images != 'default.jpg') { ?>
                <div class="mySlides">
                    <div class="numbertext">1 / 5</div>
                    <img src="<?php echo base_url(); ?>upload/product/<?php echo $row->images; ?>" style="width:100%">
                </div>
            <?php }
            if ($row->images != 'default.jpg') { ?>
                <div class="mySlides">
                    <div class="numbertext">2 / 5</div>
                    <img src="<?php echo base_url(); ?>upload/product/<?php echo $row->images_front; ?>" style="width:100%">
                </div>
            <?php }
            if ($row->images != 'default.jpg') { ?>
                <div class="mySlides">
                    <div class="numbertext">3 / 5</div>
                    <img src="<?php echo base_url(); ?>upload/product/<?php echo $row->images_side; ?>" style="width:100%">
                </div>
            <?php }
            if ($row->images != 'default.jpg') { ?>
                <div class="mySlides">
                    <div class="numbertext">4 / 5</div>
                    <img src="<?php echo base_url(); ?>upload/product/<?php echo $row->images_top; ?>" style="width:100%">
                </div>
            <?php }
            if ($row->images != 'default.jpg') { ?>
                <div class="mySlides">
                    <div class="numbertext">5 / 5</div>
                    <img src="<?php echo base_url(); ?>upload/product/<?php echo $row->images_detail; ?>" style="width:100%">
                </div>
            <?php }  ?>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

        <div class="slider-row">
            <?php if ($row->images != 'default.jpg') { ?>
                <div class="slider-column">
                    <img class="demo cursor" src="<?php echo base_url(); ?>upload/product/<?php echo $row->images; ?>" style="width:100%" onclick="currentSlide(1);" alt="Product">
                </div>
            <?php }
            if ($row->images != 'default.jpg') { ?>
                <div class="slider-column">
                    <img class="demo cursor" src="<?php echo base_url(); ?>upload/product/<?php echo $row->images_front; ?>" style="width:100%" onclick="currentSlide(2);" alt="Product">
                </div>
            <?php }
            if ($row->images != 'default.jpg') { ?>
                <div class="slider-column">
                    <img class="demo cursor" src="<?php echo base_url(); ?>upload/product/<?php echo $row->images_side; ?>" style="width:100%" onclick="currentSlide(3);" alt="Product">
                </div>
            <?php }
            if ($row->images != 'default.jpg') { ?>
                <div class="slider-column">
                    <img class="demo cursor" src="<?php echo base_url(); ?>upload/product/<?php echo $row->images_top; ?>" style="width:100%" onclick="currentSlide(4);" alt="Product">
                </div>
            <?php }
            if ($row->images != 'default.jpg') { ?>
                <div class="slider-column">
                    <img class="demo cursor" src="<?php echo base_url(); ?>upload/product/<?php echo $row->images_detail; ?>" style="width:100%" onclick="currentSlide(5);" alt="Product">
                </div>
            <?php }  ?>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slider.js"></script>