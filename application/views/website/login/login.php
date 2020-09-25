<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login | Galileo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/website/img/tab-icon.png">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/website/login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/website/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/website/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/website/login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/website/login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/website/login/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/website/login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/website/login/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/website/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/website/login/css/main.css">
	<!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?= base_url()?>website/Auth/login_action" enctype="multipart/form-data" method="post">
					<span class="login100-form-title p-b-43">
						<img src="<?= base_url() ?>assets/website/img/logo (2).png" style="max-width: 150px;" alt="">
						<br>
						<span class="txt2">Welcome back! please Sign In</span>
					</span>

					<?php if($this->session->flashdata('error')) : ?>
					<div class="alert alert-danger" role="alert">
						<?= $this->session->flashdata('error') ?>
					</div>
						<?php elseif($this->session->flashdata('success')) : ?>
					<div class="alert alert-success" role="alert">
						<?=$this->session->flashdata('success') ?>
					</div>
					<?php endif?>

					<div class="wrap-input100 validate-input" data-validate="Valid email or phone number is required: ex@abc.xyz or +6212345">
						<input class="input100" type="text" name="email_phone">
						<span class="focus-input100"></span>
						<span class="label-input100">Email or Phone Number</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" id="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="show-password" onclick="myFunction()">
							<label class="label-checkbox100" for="ckb1">
								Show Password
							</label>
						</div>

						<div>
							<a href="#" class="txt2">
								Forgot Password?
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button class="btn btn-outline-dark btn-md btn-block" style="font-family: Montserrat-Bold; text-transform: uppercase;">
							Sign in
						</button>
					</div>

					<div class="text-center p-t-40 p-b-20">
						<span class="txt2">
							<center>
								<hr style="width:75%;">
							</center>
							Don't have an account? <br> <a href="<?= base_url()?>Register" style="font-family: Montserrat-Bold; text-transform: uppercase;">Sign Up</a>
						</span>
					</div>

				</form>

				<div class="login100-more" style="background-image: url('<?= base_url() ?>assets/website/img/hero-1.jpg');">
				</div>
			</div>
		</div>
	</div>





	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/website/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/website/login/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/website/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url() ?>assets/website/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/website/login/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/website/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url() ?>assets/website/login/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/website/login/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/website/login/js/main.js"></script>

	<script type="text/javascript">
	function myFunction() {
	var x = document.getElementById("password");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
}
</script>

</body>

</html>