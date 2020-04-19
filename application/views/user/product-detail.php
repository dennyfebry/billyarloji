<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div>
    <!-- Product Title -->
    <div class="row watchTitle">
        <span> Orient Sport FET0M001B Automatic Men Black Dial Stainless Steel Strap </span>
    </div>
    <div class='row container'>
        <div class="row">
            <div class='productColumn-10 productColumn-4-md productColumn-3-lg'>
                <div class="productImg p-1">
                    <?php
                    include 'slider.php';
                     ?>
                </div>
                <div class='row p-1 priceBuy-sm'>
                    <button type="button" class='btn btn-buy btn-block'>
                        Rp. 3.500.000,-
                        <i class="fa fa-shopping-cart"></i>
                    </button>
                </div>
            </div>
            <div class='productColumn-10 productColumn-6-md productColumn-7-lg'>
                <div class="row watchTitle1">
                    <span> Product Detail</span>
                </div>
                <div class='p-1 pt-0 row'>
                    <div class='productColumn-10 productColumn-10-md productColumn-5-lg'>
                        <table class='tableProduct'>
                            <tr>
                                <th>Brand</th>
                                <td>Orient</td>
                            </tr>
                            <tr>
                                <th>Model</th>
                                <td>FET0M001B</td>
                            </tr>
                            <tr>
                                <th>Series</th>
                                <td>Orient Sports</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>Man</td>
                            </tr>
                            <tr>
                                <th>Movement</th>
                                <td>Automatic</td>
                            </tr>
                            <tr>
                                <th>Water Resistance</th>
                                <td>50 Meters/5 ATM/5 BAR</td>
                            </tr>
                        </table>
                    </div>
                    <div class='productColumn-10 productColumn-10-md productColumn-5-lg'>
                        <table class='tableProduct'>
                            <tr>
                                <th>Lug Width</th>
                                <td>20 mm</td>
                            </tr>
                            <tr>
                                <th>Case Diameter</th>
                                <td>40 mm</td>
                            </tr>
                            <tr>
                                <th>Case Thickness</th>
                                <td>8 mm</td>
                            </tr>
                            <tr>
                                <th>Case Material</th>
                                <td>Alloy</td>
                            </tr>
                            <tr>
                                <th>Strap Material</th>
                                <td>Stainless Steel</td>
                            </tr>
                            <tr>
                                <th>Dial color</th>
                                <td>Black Dial</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class='row p-1 priceBuy'>
                    <button type="button" class='btn btn-buy btn-block'>
                        Rp. 3.500.000,-
                        <i class="fa fa-shopping-cart"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='productColumn-10'>
                <div class="row watchTitle1">
                    <span> Product Description</span>
                </div>
                <div class='p-1 pt-0 paragraph'>
                    <span>Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup
                        aktif Anda, koleksi ORIENT
                        Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun
                        gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol
                        QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal.
                        Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam
                        khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik
                        di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif
                        anda. <br>
                        Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya
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

<style>
body {
    font-size: 12px;
}

.container {
    width: auto;
}

.secondary-section {
    padding-bottom: 0;
}

.row {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin-left: 0;
}

.productColumn {
    display: flex;
    flex-direction: column;
    flex: 0 50%;
}

.productColumn-3 {
    display: flex;
    flex-direction: column;
    flex: 0 30%;
}

.productColumn-5 {
    display: flex;
    flex-direction: column;
    flex: 0 50%;
}

.productColumn-7 {
    display: flex;
    flex-direction: column;
    flex: 0 70%;
}

.productColumn-10 {
    display: flex;
    flex-direction: column;
    flex: 0 100%;
}

ul.thumbnails {
    margin: 0;
}

.thumbnail {
    width: auto;
    background: transparent;
}

.watchTitle {
    border-bottom: 2px solid #8b7347;
    padding: 1.5em 1em;
}

.watchTitle1 {
    padding: 1em;
}

.pagination {
    border-top: 2px solid #8b7347;
    padding: 1.5em 1em 1em;
}

.row.watchTitle,
.row.watchTitle1 {
    margin-left: 0;
}

.watchTitle>span {
    font-size: 20px;
    font-weight: bold;
    line-height: 1.25em;
}

.watchTitle1>span {
    color: #e7bd70;
    font-size: 17px;
    font-weight: bold;
}

.span4 {
    width: auto;
}

.thumbnails>li {
    float: none;
    margin-bottom: 20px;
    margin-left: 0;
}

.section {
    padding-left: 0;
    padding-right: 0;
}

.section .container {
    padding: 0.5em;
}

.thumbnail>img {
    display: block;
    max-width: auto;
    margin-right: 0;
    margin-left: 0;
}

.thumbnail>p {
    padding-bottom: 0.5em;
}

.thumbnail h3 {
    color: #000;
    margin-top: 0;
    font-size: 17px;
}

.thumbnail h5 {
    margin: 0;
}

.thumbnail .mask {
    background: #131313;
}

.productTitle {
    background-color: #e7bd70;
    margin: 0 0.5em;
    border-radius: 0 0 10px 10px;
    opacity: 0.9;
}

.productImage {
    margin: 0 0.5em;
}

.productName {
    color: #000000;
    font-size: 17px;
    padding: 0.1em;
}

.price {
    background-color: #000000;
    font-size: 17px;
    padding: 0.1em;
}

.discount {
    color: #000000;
    font-size: 14px;
    padding: 0.1em;
    text-decoration: line-through;
}

.productImg {
    text-align: center;
}

.tableProduct {
    width: 100%;
}

.tableProduct>tbody>tr>th,
.tableProduct>tbody>tr>td {
    text-align: left;
    padding: 0.5em 0;
}

.tableProduct>tbody>tr>th {
    color: #FECE1A;
    font-size: 15px;
    width: 50%;
}

.tableProduct>tbody>tr>td {
    font-size: 12px;
}

.priceBuy {
    display: none;
}

.priceBuy-sm {
    display: flex;
}

.p-1 {
    padding: 1em;
}

.pt-0 {
    padding-top: 0;
}

.paragraph {
    text-align: justify;
    text-indent: 1em;
}

.btn-buy {
    color: #ffffff;
    background: #f60;
    border: 0;
    padding: 0.5em;
}

@media screen and (min-width: 768px) {
    body {
        font-size: 15px;
    }

    .watchTitle>span {
        font-size: 30px;
        font-weight: bold;
    }

    .watchTitle1>span {
        color: #e7bd70;
        font-size: 20px;
        font-weight: bold;
    }

    .productImage {
        margin: 0 0.5em;
    }


    .thumbnail>p {
        padding-bottom: 1em;
    }

    .thumbnail h3 {
        margin-top: 0;
        font-size: 20px;
    }

    .section .container {
        padding: 1em;
    }

    .productName {
        font-size: 20px;
        padding: 0.25em;
    }

    .price {
        font-size: 20px;
        padding: 0.25em;
    }

    .discount {
        font-size: 17px;
        padding: 0.25em;
    }

    .productColumn-3-md {
        display: flex;
        flex-direction: column;
        flex: 0 30%;
    }

    .productColumn-4-md {
        display: flex;
        flex-direction: column;
        flex: 0 40%;
    }

    .productColumn-5-md {
        display: flex;
        flex-direction: column;
        flex: 0 50%;
    }

    .productColumn-6-md {
        display: flex;
        flex-direction: column;
        flex: 0 60%;
    }

    .productColumn-10-md {
        display: flex;
        flex-direction: column;
        flex: 0 100%;
    }


    .productColumn-7-md {
        display: flex;
        flex-direction: column;
        flex: 0 70%;
    }

    .tableProduct>tbody>tr>th {
        color: #FECE1A;
        font-size: 17px;
        width: 40%;
    }

    .tableProduct>tbody>tr>td {
        font-size: 14px;
    }
}

@media screen and (min-width: 769px) {
    .productColumn-3-lg {
        display: flex;
        flex-direction: column;
        flex: 0 30%;
    }

    .productColumn-7-lg {
        display: flex;
        flex-direction: column;
        flex: 0 70%;
    }

    .productColumn-5-lg {
        display: flex;
        flex-direction: column;
        flex: 0 50%;
    }

    .priceBuy {
        display: flex;
    }

    .priceBuy>button {
        flex: 0.5;
    }

    .priceBuy-sm {
        display: none;
    }
}

@media screen and (min-width: 768px) and (max-width: 1023px) {
    .productColumn {
        flex: 0 25%;
    }
}

@media screen and (min-width: 1024px) {
    .productColumn {
        flex: 0 20%;
    }
}
</style>