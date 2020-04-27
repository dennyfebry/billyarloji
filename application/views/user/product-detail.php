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
                        <button type="button" class='btn btn-buy btn-block'>
                            Rp. 3.500.000,-
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
                        <button type="button" class='btn btn-buy btn-block'>
                            Rp.<?php echo number_format($product->price, 2, ',', '.') ?>
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="productRow mb-5">
                <div class='productColumn-10'>
                    <div class="productRow watchTitle1">
                        <span> Product Description</span>
                    </div>
                    <div class='p-1 pt-0 paragraph'>
                        <span>Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup
                            aktif Anda, koleksi ORIENT
                            Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus
                            membangun
                            gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua
                            kontrol
                            QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara
                            internal.
                            Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam
                            khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda
                            baik
                            di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup
                            aktif
                            anda. <br>
                            Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa
                            membuatnya
                            menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph
                            sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam
                            9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan
                            kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam
                            dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran
                            waktu split juga tersedia..</span>
                    </div>
                </div>
            </div>
        </div>
    </div>