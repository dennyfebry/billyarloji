<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div class="">Billy Arloji</div>
        <!-- <div class="logo-src"></div> -->
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="app-header__content">
        <div class="app-header-left">
            <div class="search-wrapper">
                <div class="input-holder">
                    <input type="text" class="search-input" placeholder="Type to search">
                    <button class="search-icon"><span></span></button>
                </div>
                <button class="close"></button>
            </div>
        </div>
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img width="42" class="rounded-circle" src="<?php echo base_url() ?>assets/content/images/Logo.png" alt="">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                    <button type="button" tabindex="0" class="dropdown-item" data-toggle="modal" data-target=".change-password">Change Password</button>
                                    <button onclick="window.location.href = '<?php echo site_url('logout') ?>';" type="button" tabindex="0" class="dropdown-item">Logout</button>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                <?= $this->session->userdata('name'); ?>
                            </div>
                            <div class="widget-subheading">
                                <?php if ($this->session->userdata('role') == 1) {
                                    echo "Super Admin";
                                } else {
                                    echo "Admin";
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                                    alert(data);
                                } else if (data == "The old password you entered is incorrect") {
                                    $('#message-error').html(data);
                                    alert(data);
                                } else {
                                    $('#message-success').html(data);
                                    alert(data);
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