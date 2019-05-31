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

	<title>Login Adm-ORI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo base_url() ?>assets/login/images/icons/favicon.ico" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/login/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/login/vendor/animate/animate.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/login/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/login/vendor/select2/select2.min.css" rel="stylesheet">

	<!--===============================================================================================-->

	<link href="<?php echo base_url() ?>assets/login/css/util.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/login/css/main.css" rel="stylesheet">
</head>

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url() ?>assets/login/images/img-02.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="<?php echo base_url() . 'index.php/login/login' ?>" method="post">
					<span class="login100-form-title">
						LOGIN
					</span>
					<div class="text-center">
						<span class="txt3">
							Selamat Datang, Silahkan Masuk Untuk Melanjutkan
						</span>
						<?php if ($this->session->flashdata('sukses')){ ?>
							<div class="alert alert-success" role="alert">
								<?php echo $this->session->flashdata('sukses'); ?>
							</div>
						<?php }elseif ($this->session->flashdata('error')){ ?>
							<div class="alert alert-warning" role="alert">
							<?php echo $this->session->flashdata('error') ?>
							</div>
						<?php }; ?>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-100">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

<script>
		$('#notifications_berhasil').slideDown('slow').delay(3000).slideUp('slow');
	</script>
	<script src="<?= base_url() ?>/assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>/assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url() ?>/assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>/assets/login/vendor/select2/select2.min.js"></script>
	<script src="<?= base_url() ?>/assets/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<script src="<?= base_url() ?>/assets/login/js/main.js"></script>

</body>

</html>
