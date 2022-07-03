<!doctype html>
<html lang="en">

<head>
	<title>REGISTRASI</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo base_url("dist/Registrasi/css/style.css") ?>" />

</head>

<body class="img js-fullheight" style="background-image: url(<?php echo base_url("dist/Registrasi/images/M.jpg") ?>);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">REGISTRASI</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<?php echo form_open('user/register') ?>
						<div class="form-group">
							<input type="text" name="username" class="form-control" placeholder="Username" required>
						</div>

						<div class="form-group">
							<input type="text" name="email" class="form-control" placeholder="Email" required>
						</div>

						<div class="form-group">
							<input type="text" name="level" class="form-control" value="user" required>
							<!-- <select name="level" class="form-control">
								<option placeholder="">Pilih Level</option>
								<option placeholder="Kasir">Admin</option>
								<option placeholder="User">User</option>

							</select> -->
						</div>

						<div class="form-group">
							<input id="password-field" type="password" class="form-control" placeholder="Password" required>
							<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
						</div>
						<div class="form-group">
							<button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
						</div>
						<?php echo form_close() ?>
						<div class="form-group">
							<a href="<?php echo base_url("index.php/users/login") ?>" class="form-control btn btn-primary submit px-3">I already have a account</a>
						</div>
						<!-- <div class="form-group d-md-flex">
							<div class="w-50">
								<label class="checkbox-wrap checkbox-primary">Remember Me
									<input type="checkbox" checked>
									<span class="checkmark"></span>
								</label>
							</div>
							<div class="w-50 text-md-right">
								<a href="#" style="color: #fff">Forgot Password</a>
							</div>
						</div> -->
					</div>
				</div>
			</div>
	</section>

	<script src="<?php echo base_url("dist/Registrasi/js/jquery.min.js") ?>"></script>
	<script src="<?php echo base_url("dist/Registrasi/js/popper.js") ?>"></script>
	<script src="<?php echo base_url("dist/Registrasi/js/bootstrap.min.js") ?>"></script>
	<script src="<?php echo base_url("dist/Registrasi/js/main.js") ?>"></script>

</body>

</html>