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

    <!-- Summernote -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.js"></script> -->
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
    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/content/login/js/jquery-3.2.1.min.js"></script> -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
            // $('#summernote').summernote();
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
                            <h5 class="modal-title">Delete Category ?</h5>
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
                            <h5 class="modal-title">Delete Brand ?</h5>
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
                            <h5 class="modal-title">Delete Product ?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Yes" below if you want to delete the product data.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/product/delete/<?php echo $row->id; ?>">Yes</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal delete Slider -->
            <div id="deleteSlider<?php echo $row->id; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Slider ?</h5>
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
                            <h5 class="modal-title">Delete Testimoni ?</h5>
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

            <!-- Modal delete Admin -->
            <div id="deleteAdmin<?php echo $row->id; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Account Admin ?</h5>
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