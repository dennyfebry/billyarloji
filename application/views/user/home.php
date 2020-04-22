<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div id="home">
    <!-- Start Slider section -->
    <div class='row'>
        <div class='productColumn-1'></div>
        <div class="productColumn-8" style='padding: 1.5em 0'>
            <div>
                <img class="sliderImg" src="<?php echo base_url(); ?>upload/product/1.jpg">
                <img class="sliderImg" src="<?php echo base_url(); ?>upload/product/2.jpg">
                <img class="sliderImg" src="<?php echo base_url(); ?>upload/product/3.jpg">

                <!-- <div class="da-arrows">
                    <span class="da-arrows-prev"></span>
                    <span class="da-arrows-next"></span>
                </div> -->
            </div>
        </div>
        <div class='productColumn-1'></div>
    </div>
    <!-- End Slider Section -->

    <!-- Start Footer Section -->
    <div class="footer">
        <div class='row' style='height: 100px'>
            <div class='productColumn-equal' style='background-color: white'></div>
            <div class='productColumn-equal'></div>
            <div class='productColumn-equal' style='background-color: white'></div>
            <div class='productColumn-equal'></div>
        </div>
    </div>
    <!-- End Footer Section -->
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("sliderImg");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {
        myIndex = 1
    }
    x[myIndex - 1].style.display = "block";
    setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>