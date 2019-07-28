<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<?php
if ($this->session->userdata('masuk') == TRUE) {
    redirect('admin/berandaadmin');
} ?>
<html lang="en">

<head>
    <title>Login Siber</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="<?php echo base_url() ?>assets/login/images/icons/favicon.ico" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/login/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/login/fonts/iconic/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/login/vendor/animate/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/login/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/login/vendor/animsition/css/animsition.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/login/vendor/select2/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/login/vendor/daterangepicker/daterangepicker.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/login/css/util.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/login/css/main.css" rel="stylesheet">

</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="<?php echo site_url('simak/do_login'); ?>" method="post">
                    <div class="text-center">
                        <img src="<?php echo base_url() ?>assets/foto/logo2.png">
                    </div>
                    <br>
                    <div class="text-center">
                        <span class="txt3">
                            Selamat Datang, Silahkan Masuk Untuk Melanjutkan
                        </span>
                        <?php if ($this->session->flashdata('message')){ ?>
                            
                                <?php echo $this->session->flashdata('message'); ?>
                           
                    
                            
                        <?php }; ?>
                    </div>
                    <br>
                    <div class="wrap-input100 validate-input" data-validate = "Valid NIO is required">
                        <input class="input100" type="text" name="username">
                        <span class="focus-input100" data-placeholder="No Induk Ombudsman"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <span class="txt1">
                            Ombudsman RI Perwakilan Lampung
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div id="dropDownSelect1"></div>
    
    <script>
        $('#notifications_berhasil').slideDown('slow').delay(3000).slideUp('slow');
    </script>
    <script src="<?= base_url() ?>/assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url() ?>/assets/login/vendor/animsition/js/animsition.min.js"></script>
    <script src="<?= base_url() ?>/assets/login/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url() ?>/assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/login/vendor/select2/select2.min.js"></script>
    <script src="<?= base_url() ?>/assets/login/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url() ?>/assets/login/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="<?= base_url() ?>/assets/login/vendor/countdowntime/countdowntime.js"></script>
    <script src="<?= base_url() ?>/assets/login/vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

    <script src="<?= base_url() ?>/assets/login/js/main.js"></script>

</body>
</html>