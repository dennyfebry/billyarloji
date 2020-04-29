<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div>
    <!-- Product Title -->
    <div class="productRow watchTitle">
        <span> <?php echo $product->name . " " . $product->movement . " " . $product->material; ?></span>
    </div>
    <div class='productRow container'>
        <div class="productRow">
            <div class='productColumn-10 productColumn-4-md productColumn-3-lg'>
                <div class="productImg p-1">
                    <?php
                    include 'slider.php';
                    ?>
                </div>
                <div class='productRow p-1 priceBuy-sm'>
                    <?php
                    $buyFormat = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    $shareWA = 'https://wa.me/' . $phoneNumber . '?text=' . $buyFormat; ?>
                    <button type="button" class='btn btn-buy btn-block' onclick="location.href='<?php echo $shareWA; ?>'">
                        <?php if ($product->discount == 0) { ?>
                            Rp.<?php echo number_format($product->price, 2, ',', '.') ?>
                        <?php } else {
                            $total = $product->price - (($product->price * $product->discount) / 100); ?>
                            Rp.<?php echo number_format($total, 2, ',', '.') ?>
                        <?php } ?>
                        <i class="fa fa-shopping-cart"></i>
                    </button>
                </div>
            </div>
            <div class='productColumn-10 productColumn-6-md productColumn-7-lg'>
                <div class="productRow watchTitle1">
                    <span> Product Detail</span>
                </div>
                <div class='p-1 pt-0 productRow'>
                    <div class='productColumn-10 productColumn-10-md productColumn-5-lg'>
                        <table class='tableProduct'>
                            <tr>
                                <th>Brand</th>
                                <td><?php echo $brandname; ?></td>
                            </tr>
                            <tr>
                                <th>Model</th>
                                <td><?php echo $product->model; ?></td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td><?php echo $product->type; ?></td>
                            </tr>
                            <tr>
                                <th>Diameter</th>
                                <td><?php echo $product->diameter; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class='productColumn-10 productColumn-10-md productColumn-5-lg'>
                        <table class='tableProduct'>
                            <tr>
                                <th>Movement</th>
                                <td><?php echo $product->movement; ?></td>
                            </tr>
                            <tr>
                                <th>Material</th>
                                <td><?php echo $product->material; ?></td>
                            </tr>
                            <tr>
                                <th>Condition</th>
                                <td><?php echo $product->condition_product; ?></td>
                            </tr>
                            <tr>
                                <th>Completeness</th>
                                <td><?php echo $product->completeness; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class='productRow p-1 priceBuy'>
                    <a href="<?php echo $product->url; ?>" target="_blank" type="button" class='btn btn-buy btn-block'>
                        <?php if ($product->discount == 0) { ?>
                            Rp.<?php echo number_format($product->price, 2, ',', '.') ?>
                        <?php } else {
                            $total = $product->price - (($product->price * $product->discount) / 100); ?>
                            Rp.<?php echo number_format($total, 2, ',', '.') ?>
                        <?php } ?>
                        <i class="fa fa-shopping-cart"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="productRow mb-5">
            <div class='productColumn-10'>
                <div class="productRow watchTitle1">
                    <span> Product Description</span>
                </div>
                <div class='p-1 pt-0 paragraph'>
                    <span><?php echo $product->description; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>