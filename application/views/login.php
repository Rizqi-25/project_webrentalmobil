<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminLTE 3 | Log in (v2)</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url("plugins/fontawesome-free/css/all.min.css") ?>">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url("plugins/icheck-bootstrap/icheck-bootstrap.min.css") ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url("dist/css/adminlte.min.css") ?>">
</head>

<body class="hold-transition login-page img" style="background-image: url(<?php echo base_url("dist/Registrasi/images/car2.jpg") ?>);">
	<div class="row justify-content-center">
		<!-- /.login-logo -->
		<div class="card card-primary  justify-content-center" style="width: 100%">
			<div class="card-header text-center">
				<p class="h1"><b>TI</b>11</p>
				<p class="h2"><b>Web Rental Mobil</b></p>
			</div>
			<div class="row justify-content-center">
				<div class=" col-sm-12">
					<div class="card-body ">
						<p class="login-box-msg">Sign in to start your session</p>

						<?php echo form_open('users/autentikasi') ?>
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Username" name="username">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-envelope"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="password" class="form-control" placeholder="Password" name="password">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>
						</div>
						<div class="row">

							<div class="col-4">
								<button type="submit" class="btn btn-primary btn-block">Login</button>
							</div>
							<div class="col-4">
								<a href="<?php echo base_url("index.php/users/registrasi") ?>" class="btn btn-primary">Register</a>
							</div>
							<div class="col-4">
								<a href="<?php echo base_url("index.php/dashboard") ?>" class="btn btn-danger">Cancel</a>
							</div>
							<!-- /.col -->
						</div>
						<?php echo form_close() ?>


					</div>
				</div>


			</div>

			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?php echo base_url("plugins/jquery/jquery.min.js") ?>"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url("plugins/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url("dist/js/adminlte.min.js") ?>"></script>
</body>

</html>