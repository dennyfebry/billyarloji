<?php
date_default_timezone_set("Asia/jakarta");
$id = "";
$category_id = "";
$brand_id = "";
$name = "";
$model = "";
$type = "";
$diameter = "";
$movement = "";
$material = "";
$condition_product = "";
$completeness = "";
$description = "";
$price = "";
$discount = "";
$images = "";
$images_front = "";
$images_side = "";
$images_top = "";
$images_detail = "";
$url = "https://linktr.ee/arlojilakilaki";
$status = "";
$created_date = date("Y-m-d H:i:s");
$created_by = $this->session->userdata('id');
$updated_date = date("Y-m-d H:i:s");
$updated_by = $this->session->userdata('id');
if ($content == "Edit") {
    $id = $product->id;
    $category_id = $product->category_id;
    $brand_id = $product->brand_id;
    $name = $product->name;
    $model = $product->model;
    $type = $product->type;
    $diameter = $product->diameter;
    $movement = $product->movement;
    $material = $product->material;
    $condition_product = $product->condition_product;
    $completeness = $product->completeness;
    $description = $product->description;
    $price = $product->price;
    $discount = $product->discount;
    $images = $product->images;
    $images_front = $product->images_front;
    $images_side = $product->images_side;
    $images_top = $product->images_top;
    $images_detail = $product->images_detail;
    $url = $product->url;
    $status = $product->status;
    $created_date = $product->created_date;
    $created_by = $product->created_by;
    $updated_date = date("Y-m-d H:i:s");
    $updated_by = $this->session->userdata('id');
}
?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-cart icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div><?= $titlepage ?>
                    <div class="page-title-subheading">
                        <a style="color:#777;" href="<?php echo site_url('list_product') ?>"><?= $titlepage ?></a> / <?php echo $content; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header"><?= $titlepage ?>
                    <div class="btn-actions-pane-right">
                    </div>
                </div>
                <div class="card-body">
                    <?php if ($content == "Edit") { ?>
                        <form class="needs-validation" action="" method="post" enctype="multipart/form-data" novalidate>
                        <?php } else { ?>
                            <form class="needs-validation" action="<?php echo site_url('list_product/add') ?>" method="post" enctype="multipart/form-data" novalidate>
                            <?php } ?>

                            <div class="form-row">
                                <?php if ($this->session->flashdata('success')) : ?>
                                    <div class="mb-2 mr-2 badge badge-success">
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif; ?>

                                <input type="hidden" name="content" value="<?php echo $content; ?>">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="hidden" name="created_date" value="<?php echo $created_date; ?>">
                                <input type="hidden" name="created_by" value="<?php echo $created_by; ?>">
                                <input type="hidden" name="updated_date" value="<?php echo $updated_date; ?>">
                                <input type="hidden" name="updated_by" value="<?php echo $updated_by; ?>">
                                <input type="hidden" name="old_images" value="<?php echo $images; ?>">
                                <input type="hidden" name="old_images_front" value="<?php echo $images_front; ?>">
                                <input type="hidden" name="old_images_side" value="<?php echo $images_side; ?>">
                                <input type="hidden" name="old_images_top" value="<?php echo $images_top; ?>">
                                <input type="hidden" name="old_images_detail" value="<?php echo $images_detail; ?>">
                                <input type="hidden" name="url" value="<?php echo $url; ?>">

                                <div class="col-md-12 mb-3">
                                    <label for="Category_id">Category</label>
                                    <select class="form-control" name="category_id" id="categoryselect">
                                        <option value="" selected disabled>-- Select Category --</option>
                                        <?php foreach ($name_category as $row) { ?>
                                            <option value="<?php echo $row->id ?>" <?php if ($category_id == $row->id) echo 'selected'; ?>><?php echo $row->category ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php echo form_error('category_id') ?>
                                    <div class="invalid-feedback">
                                        Please choose a category.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="Brand_id">Brand</label>
                                    <select class="form-control" name="brand_id" id="brand">
                                        <option value="" selected disabled>-- Select Brand --</option>
                                    </select>
                                    <?php echo form_error('brand_id') ?>
                                    <div class="invalid-feedback">
                                        Please choose a brand.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="Name">Nama Produk</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nama Produk" value="<?php echo $name; ?>" required>
                                    <?php echo form_error('name') ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill in the name product.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Model">Model</label>
                                    <input type="text" class="form-control" name="model" placeholder="Model" value="<?php echo $model; ?>">
                                    <?php echo form_error('model') ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill in the model product.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Type">Type</label>
                                    <input type="text" class="form-control" name="type" placeholder="Type" value="<?php echo $type; ?>">
                                    <?php echo form_error('type') ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill in the type product.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Diameter">Diameter</label>
                                    <input type="text" class="form-control" name="diameter" placeholder="Diameter" value="<?php echo $diameter; ?>" required>
                                    <?php echo form_error('diameter') ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill in the diameter product.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Movement">Movement</label>
                                    <input type="text" class="form-control" name="movement" placeholder="Movement" value="<?php echo $movement; ?>" required>
                                    <?php echo form_error('movement') ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill in the movement product.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Material">Material</label>
                                    <input type="text" class="form-control" name="material" placeholder="Material" value="<?php echo $material; ?>" required>
                                    <?php echo form_error('material') ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill in the material product.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Condition">Kondisi</label>
                                    <input type="text" class="form-control" name="condition_product" placeholder="Kondisi" value="<?php echo $condition_product; ?>" required>
                                    <?php echo form_error('condition_product') ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill in the condition product.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Completeness">Kelengkapan</label>
                                    <input type="text" class="form-control" name="completeness" placeholder="Kelengkapan" value="<?php echo $completeness; ?>" required>
                                    <?php echo form_error('completeness') ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill in the completeness product.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Description">Deskripsi</label>
                                    <textarea id="summernote" class="form-control" name="description" required><?php echo $description; ?></textarea>
                                    <?php echo form_error('description') ?>
                                    <div class="invalid-feedback">
                                        Please fill in the description.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Price">Harga</label>
                                    <input type="text" class="form-control" id="price" name="price" placeholder="Harga" value="<?php echo $price; ?>" required>
                                    <?php echo form_error('price') ?>
                                    <div class="invalid-feedback">
                                        Please fill in the price.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Discount">Diskon</label>
                                    <input type="text" class="form-control" id="discount" name="discount" placeholder="Diskon" value="<?php echo $discount; ?>" required>
                                    <?php echo form_error('discount') ?>
                                    <div class="invalid-feedback">
                                        Please fill in the discount.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Images">Gambar Utama</label>
                                    <input type="file" id="images" class="form-control" name="images" placeholder="Gambar Utama" value="<?php echo $images; ?>" required>
                                    <img id="view_images" src="#" alt="Gambar Utama" />
                                    <?php echo form_error('images') ?>
                                    <span id="hidenote1" style="font-size:10px;"> gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran minimum 600 x 600 px)</span>
                                    <div class="invalid-feedback">
                                        Please choose a images.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Images_Front">Gambar Depan</label>
                                    <input type="file" id="images_front" class="form-control" name="images_front" placeholder="Gambar Depan" value="<?php echo $images_front; ?>">
                                    <img id="view_images_front" src="#" alt="Gambar Depan" />
                                    <?php echo form_error('images_front') ?>
                                    <span id="hidenote2" style="font-size:10px;"> gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran minimum 600 x 600 px)</span>
                                    <div class="invalid-feedback">
                                        Please choose a images.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Images_Side">Gambar Samping</label>
                                    <input type="file" id="images_side" class="form-control" name="images_side" placeholder="Gambar Samping" value="<?php echo $images_side; ?>">
                                    <img id="view_images_side" src="#" alt="Gambar Samping" />
                                    <?php echo form_error('images_side') ?>
                                    <span id="hidenote3" style="font-size:10px;"> gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran minimum 600 x 600 px)</span>
                                    <div class="invalid-feedback">
                                        Please choose a images.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Images_Top">Gambar Atas</label>
                                    <input type="file" id="images_top" class="form-control" name="images_top" placeholder="Gambar Atas" value="<?php echo $images_top; ?>">
                                    <img id="view_images_top" src="#" alt="Gambar Atas" />
                                    <?php echo form_error('images_top') ?>
                                    <span id="hidenote4" style="font-size:10px;"> gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran minimum 600 x 600 px)</span>
                                    <div class="invalid-feedback">
                                        Please choose a images.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Images_Detail">Gambar Detail</label>
                                    <input type="file" id="images_detail" class="form-control" name="images_detail" placeholder="Gambar Detail" value="<?php echo $images_detail; ?>">
                                    <img id="view_images_detail" src="#" alt="Gambar Detail" />
                                    <?php echo form_error('images_detail') ?>
                                    <span id="hidenote5" style="font-size:10px;"> gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran minimum 600 x 600 px)</span>
                                    <div class="invalid-feedback">
                                        Please choose a images.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Status">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="2" <?php if ($status == 2) echo 'selected'; ?>>Draft</option>
                                        <option value="1" <?php if ($status == 1) echo 'selected'; ?>>Active</option>
                                    </select>
                                    <?php echo form_error('status') ?>
                                    <div class="invalid-feedback">
                                        Please choose a status.
                                    </div>
                                </div>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Submit form">
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    $('#summernote').summernote({
        placeholder: 'Enter text...',
        tabsize: 2,
        height: 100,
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontstyle', ['fontname', 'fontsize', 'color']],
            ['para', ['ul', 'ol', 'paragraph', 'height']],
            ['insert', ['link', 'table', 'hr']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });

    function readURL(input, img) {
        console.log(img);
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            if (img == 1) {
                var images = $("#view_images");
                images.css({
                    "width": 300,
                    "height": 300
                });
                reader.onload = function(e) {
                    images.show();
                    images.attr('src', e.target.result);
                    $('#hidenote' + img).hide();
                }
            } else if (img == 2) {
                console.log("kedua");
                var images_front = $("#view_images_front");
                images_front.css({
                    "width": 300,
                    "height": 300
                });
                reader.onload = function(e) {
                    images_front.show();
                    images_front.attr('src', e.target.result);
                    $('#hidenote' + img).hide();
                }
            } else if (img == 3) {
                var images_side = $("#view_images_side");
                images_side.css({
                    "width": 300,
                    "height": 300
                });
                reader.onload = function(e) {
                    images_side.show();
                    images_side.attr('src', e.target.result);
                    $('#hidenote' + img).hide();
                }
            } else if (img == 4) {
                var images_top = $("#view_images_top");
                images_top.css({
                    "width": 300,
                    "height": 300
                });
                reader.onload = function(e) {
                    images_top.show();
                    images_top.attr('src', e.target.result);
                    $('#hidenote' + img).hide();
                }
            } else if (img == 5) {
                var images_detail = $("#view_images_detail");
                images_detail.css({
                    "width": 300,
                    "height": 300
                });
                reader.onload = function(e) {
                    images_detail.show();
                    images_detail.attr('src', e.target.result);
                    $('#hidenote' + img).hide();
                }
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#images").change(function() {
        var img = 1;
        readURL(this, img);
    });
    $("#images_front").change(function() {
        var img = 2;
        readURL(this, img);
    });
    $("#images_side").change(function() {
        var img = 3;
        readURL(this, img);
    });
    $("#images_top").change(function() {
        var img = 4;
        readURL(this, img);
    });
    $("#images_detail").change(function() {
        var img = 5;
        readURL(this, img);
    });

    $(document).ready(function() {
        $("#view_images").hide();
        $("#view_images_front").hide();
        $("#view_images_side").hide();
        $("#view_images_top").hide();
        $("#view_images_detail").hide();

        var price = document.getElementById("price");
        price.addEventListener("keyup", function(e) {
            price.value = convertRupiah(this.value, "Rp. ");
        });
        price.addEventListener('keydown', function(event) {
            return isNumberKey(event);
        });

        var discount = document.getElementById("discount");
        discount.addEventListener("keyup", function(e) {
            discount.value = convertRupiah(this.value, "Rp. ");
        });
        discount.addEventListener('keydown', function(event) {
            return isNumberKey(event);
        });

        function convertRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, "").toString(),
                split = number_string.split(","),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? "." : "";
                rupiah += separator + ribuan.join(".");
            }

            rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
            return prefix == undefined ? rupiah : rupiah ? prefix + rupiah : "";
        }

        function isNumberKey(evt) {
            key = evt.which || evt.keyCode;
            if (key != 188 // Comma
                &&
                key != 8 // Backspace
                &&
                key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
                &&
                (key < 48 || key > 57) // Non digit
            ) {
                evt.preventDefault();
                return;
            }
        }

        var selected_brand = '<?php echo $brand_id ?>';
        var category = $("#categoryselect option:selected").text();
        $('#brand')
            .find('option')
            .remove()
            .end();
        $.ajax({
            url: "<?php echo base_url() . 'index.php/list_product/getBrand' ?>",
            type: "POST",
            data: {
                "name_category": category
            },
            success: function(data) {
                var obj = JSON.parse(data);
                $.each(obj, function(i, item) {
                    var id = item.id;
                    var category_name = item.category;
                    var brand_name = item.brand;
                    if (id == selected_brand) {
                        $('#brand').append('<option value="' + id + '" selected>' + brand_name + '</option>');
                    } else {
                        $('#brand').append('<option value="' + id + '">' + brand_name + '</option>');
                    }
                });
            },
            error: function() {
                console.log("error");
            }
        });
        $(function() {
            $("#categoryselect").change(function() {
                var category = $("#categoryselect option:selected").text();
                $('#brand')
                    .find('option')
                    .remove()
                    .end();

                $.ajax({
                    url: "<?php echo base_url() . 'index.php/list_product/getBrand' ?>",
                    type: "POST",
                    data: {
                        "name_category": category
                    },
                    success: function(data) {
                        var obj = JSON.parse(data);
                        console.log(obj);
                        $.each(obj, function(i, item) {
                            var id = item.id;
                            var category_name = item.category;
                            var brand_name = item.brand;
                            $('#brand').append($('<option>', {
                                value: id,
                                text: brand_name
                            }));
                            // $("brand select").val("val2");
                        });
                    },
                    error: function() {
                        console.log("error");
                    }
                });
            })
        })
    });
</script>