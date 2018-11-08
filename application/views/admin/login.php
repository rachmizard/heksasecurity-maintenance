<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="<?php echo base_url('public/img/logo.png'); ?>"/>

		<!--Global styles -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('public/css/components.css'); ?>" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('public/css/custom.css'); ?>" />
		<!--End of Global styles -->

		<!-- angularjs important -->
		<script type="text/javascript" src="<?php echo base_url(); ?>public/angular/js/angular.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery-3.2.1.min.js"></script>
		<!-- end angularjs -->

		<!--Plugin styles-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('public/vendors/wow/css/animate.css'); ?>" />
		<!--End of Plugin styles-->

		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>" />
	</head>
	<body style="overflow: hidden;">
	  <?php if (isset($error)){
 echo '
<div class="row">
<div class="col-xs-4" style="margin: 30px;">
	<div class="alert alert-secondary alert-dismissible fade show" role="alert" style="background-color: #f8f9fa;border-color: #212529;">
	Username atau Password Anda salah
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
</div>
</div>
';
} ?>
		<div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
			<div class="row">
				<div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-10 push-sm-1 login_top_bottom">
					<div class="row">
						<div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-12">
							<div class="login_logo login_border_radius1" style="padding: 10px">
								<h3 class="text-center">
									<img src="<?php echo base_url('public/img/logo.png'); ?>" alt="PT Heksa Garda Utama" class="heksa_logo" style="height: 60px;width: 50px;">
									<span class="text-white"> PT Heksa Garda Utama &nbsp;<br/>
									Login</span>
								</h3>
							</div>

							<div class="bg-white login_content login_border_radius" ng-app="myApp" ng-controller="formLogin">
								<form  action="<?php echo base_url('login/aksi_login'); ?>" method="post">
									<div class="form-group">
										<label for="username" class="col-form-label form_lay_email2">Username</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
											<input type="text" class="form-control form_lay_input2" id="username" name="username" placeholder="Username" ng-model="username">
										</div>
									</div>

									<div class="form-group">
										<label for="password" class="col-form-label">Password</label>
										<div class="input-group">
											<span class="input-group-addon addon_password"><i class="fa fa-lock text-primary"></i></span>
											<input type="password" class="form-control form-control-md" id="password" name="password" placeholder="Password" ng-model="password">
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<input class="btn btn-primary btn-block login_button" type="submit" value="Login">
											</div>
										</div>
									</div>
								</form>

								<div class="form-group">
									<div class="row">
										<div class="col-6">
											<label class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input form-control">
												<span class="custom-control-indicator"></span>
												<a class="custom-control-description">Keep me logged in</a>
											</label>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>







		<!-- global js -->
		<script type="text/javascript" src="<?php echo base_url('public/js/jquery.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('public/js/tether.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>
		<!-- end of global js-->

		<!--Plugin js-->
		<script type="text/javascript" src="<?php echo base_url('public/vendors/wow/js/wow.min.js'); ?>"></script>
		<!--End of plugin js-->

		<script type="text/javascript">
			$(document).ready(function() {
				$(window).on("load", function() {
					$('.preloader img').fadeOut();
					$('.preloader').fadeOut(1000);
				});
				new WOW().init();
			});
		</script>
	</body>
</html>