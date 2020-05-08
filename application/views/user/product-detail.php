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
                <div class="productRow watchTitle1">
                    <span> Price</span>
                </div>
                <div class='productColumn-10 p-1 pt-0 priceDiscount-sm'>
                    <table class='tableProduct'>
                        <?php if ($product->discount != 0) { ?>
                            <tr>
                                <td class='discount-detail'>
                                    <?php echo ("Rp. " . number_format($product->price, 2, ',', '.')); ?>
                                </td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td class="price-detail">
                                <?php if ($product->discount != 0) {
                                    $total = $product->price - (($product->price * $product->discount) / 100);
                                    echo ("Rp. " . number_format($total, 2, ',', '.'));
                                } else {
                                    echo ("Rp. " . number_format($product->price, 2, ',', '.'));
                                } ?>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class='productColumn-10 p-1 pt-0 priceDiscount-sm'>
                    <table class='tableProduct'>
                        <?php if ($product->discount != 0) { ?>
                            <tr>
                                <th rowspan="2" class="priceTitle">Price</th>
                                <td class='discount-detail'>
                                    <?php echo ("Rp. " . number_format($product->price, 2, ',', '.')); ?>
                                </td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <?php if ($product->discount == 0) {
                                echo ("<th class='priceTitle'>Price</th>");
                            } ?>
                            <td class="price-detail">
                                <?php if ($product->discount != 0) {
                                    $total = $product->price -  $product->discount;
                                    echo ("Rp. " . number_format($total, 2, ',', '.'));
                                } else {
                                    echo ("Rp. " . number_format($product->price, 2, ',', '.'));
                                } ?>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class='productRow p-1 priceBuy-sm'>
                    <a href="<?php echo $product->url; ?>" target="_blank" type="button" class='btn btn-buy btn-block'>
                        Buy Now
                    </a>
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
                <div class="priceDiscount p-1">
                    <div class="productRow watchTitle1 p-0">
                        <span> Price</span>
                    </div>
                    <?php if ($product->discount != 0) { ?>
                        <span class='discount-detail'>
                            <?php echo ("Rp. " . number_format($product->price, 2, ',', '.')); ?>
                        </span>
                    <?php } ?>
                    <span class="price-detail">
                        <?php if ($product->discount != 0) {
                            $total = $product->price - $product->discount;
                            echo ("Rp. " . number_format($total, 2, ',', '.'));
                        } else {
                            echo ("Rp. " . number_format($product->price, 2, ',', '.'));
                        } ?>
                    </span>
                </div>
                <div class='productRow p-1 priceBuy'>
                    <a href="<?php echo $product->url; ?>" target="_blank" type="button" class='btn btn-buy btn-block'>
                        Buy Now
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