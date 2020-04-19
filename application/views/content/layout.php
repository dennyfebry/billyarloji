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
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/content/login/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>

    <!-- Modal Change Password -->
    <div class="modal fade change-password" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="validationChangePassword" novalidate>
                    <div class="modal-body">
                        <div class="col-md-12 mb-3">
                            <div class="mb-2 mr-2 badge badge-danger" id="message-error"></div>
                            <div class="mb-2 mr-2 badge badge-success" id="message-success"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="Old Password">Old Password</label>
                                <input type="password" class="form-control" id="old_password" placeholder="Old Password" value="" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid old password.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="New Password">New Password</label>
                                <input type="password" class="form-control" id="new_password" placeholder="New Password" value="" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid new password.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="Re-type Password">Re-type Password</label>
                                <input type="password" class="form-control" id="retype_password" placeholder="Re-type Password" value="" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid re-type password.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('validationChangePassword');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();

                        } else if (form.checkValidity() === true) {
                            var old_password = $('#old_password').val();
                            var new_password = $('#new_password').val();
                            var retype_password = $('#retype_password').val();

                            $.ajax({
                                type: "POST",
                                url: "<?= base_url('index.php/content/c_login/change_password') ?>",
                                dataType: "JSON",
                                data: {
                                    old_password: old_password,
                                    new_password: new_password,
                                    retype_password: retype_password
                                },
                                success: function(data) {
                                    console.log(data);
                                    if (data == "New passwords are not the same") {
                                        $('#message-error').html(data);
                                    } else if (data == "The password you entered is incorrect") {
                                        $('#message-error').html(data)
                                    } else {
                                        $('#message-success').html(data)
                                        setTimeout(function() {
                                            document.getElementById("myCheck").click();
                                        }, 1500);
                                    }
                                }
                            });
                        }
                        form.classList.add('was-validated');
                        // return false;
                    }, false);
                });
            }, false);
        })();
    </script>

    <?php
    //  if (count($data['rows']) == 0) {
    //     $init = new stdClass;
    //     $data['rows'] = array($init);
    //     $init->id = '';
    // } 
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

</body>

</html>