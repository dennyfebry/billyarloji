<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Admin Billy Arloji">
    <title><?= $titlepage ?></title>
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/content/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url() ?>assets/content/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/content/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/content/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

    <style>
        body {
            background-color: #F0F3F5 !important;
        }
    </style>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <?php
        include 'header.php';
        ?>
        <div class="app-main">
            <?php
            include 'sidebar.php';
            ?>
            <div class="app-main__outer">
                <?php
                include $page . '.php';
                ?>
                <?php
                include 'footer.php';
                ?>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/content/js/main.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                stateSave: true
            });

            $('#summernote').summernote({
                placeholder: 'Enter text...',
                tabsize: 2,
                height: 100,
                toolbar: [
                    ['style', ['undo', 'redo', 'bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontstyle', ['fontname', 'fontsize', 'color']],
                    ['para', ['ul', 'ol', 'paragraph', 'height']],
                    ['insert', ['link', 'table', 'hr']],
                    ['view', ['fullscreen', 'codeview', 'help', ]]
                ]
            });

            // Dashboard
            $('#view_background[src=""]').hide();
            $('#view_background:not([src=""])').show();

            // Testimoni
            $('#view_testimoni[src=""]').hide();
            $('#view_testimoni:not([src=""])').show();

            // Product
            $('#view_slider[src=""]').hide();
            $('#view_slider:not([src=""])').show();

            // Slider
            $('#view_images[src=""]').hide();
            $('#view_images:not([src=""])').show();
            $('#view_images_front[src=""]').hide();
            $('#view_images_front:not([src=""])').show();
            $('#view_images_side[src=""]').hide();
            $('#view_images_side:not([src=""])').show();
            $('#view_images_side[src=""]').hide();
            $('#view_images_side:not([src=""])').show();
            $('#view_images_top[src=""]').hide();
            $('#view_images_top:not([src=""])').show();
            $('#view_images_detail[src=""]').hide();
            $('#view_images_detail:not([src=""])').show();
        });
    </script>



    <?php if ($count == 0) {
    } else {
        foreach ($atribute as $row) {
    ?>
            <!-- Modal delete Category -->
            <div id="deleteCategory<?php echo $row->id; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Category <?php echo $row->category; ?> ?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Yes" below if you want to delete the category data.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/category/delete/<?php echo $row->id; ?>">Yes</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal delete Brand -->
            <div id="deleteBrand<?php echo $row->id; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Brand <?php echo $row->brand; ?> ?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Yes" below if you want to delete the brand data.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/brand/delete/<?php echo $row->id; ?>">Yes</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal delete Product -->
            <div id="deleteProduct<?php echo $row->id; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Product <?php echo $row->brand; ?> - <?php echo $row->name; ?> ?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Yes" below if you want to delete the product data.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/list_product/delete/<?php echo $row->id; ?>">Yes</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal delete Slider -->
            <div id="deleteSlider<?php echo $row->id; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Slider <?php echo $row->title; ?> ?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Yes" below if you want to delete the slider data.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/slider/delete/<?php echo $row->id; ?>">Yes</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal delete Testimoni -->
            <div id="deleteTestimoni<?php echo $row->id; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Testimoni <?php echo $row->title; ?> ?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Yes" below if you want to delete the testimoni data.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/testimoni/delete/<?php echo $row->id; ?>">Yes</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal delete Social -->
            <div id="deleteSocial<?php echo $row->id; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Social <?php echo $row->title; ?>?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Yes" below if you want to delete the social data.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/social/delete/<?php echo $row->id; ?>">Yes</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal delete Admin -->
            <div id="deleteAdmin<?php echo $row->id; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Account <?php echo $row->name; ?> ?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Yes" below if you want to delete the admin data.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/superadmin/delete/<?php echo $row->id; ?>">Yes</a>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
</body>

</html>