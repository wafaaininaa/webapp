<!-- <!DOCTYPE html> 
<html>
<head>
	<title>Login Admin</title>
</head>
<body>
	<h1>Membuat Login Dengan CodeIgniter <br/> www.malasngoding.com</h1>
	<form action="<?php echo site_url('login/aksi_login'); ?>" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
	<link href="<?php echo base_url('images/icons/favicon.ico') ?>" rel="stylesheet">

<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"> -->
	<link href="<?php echo base_url('fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>" rel="stylesheet">

<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css"> -->
	<link href="<?php echo base_url('fonts/iconic/css/material-design-iconic-font.min.css') ?>" rel="stylesheet">

<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> -->
	<link href="<?php echo base_url('assets/animate/animate.css') ?>" rel="stylesheet">

<!--===============================================================================================-->	
	<!-- <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css"> -->
	<link href="<?php echo base_url('assets/css-hamburgers/hamburgers.min.css') ?>" rel="stylesheet">

<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css"> -->
	<link href="<?php echo base_url('assets/animsition/css/animsition.min.css') ?>" rel="stylesheet">

<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> -->
	<link href="<?php echo base_url('assets/select2/select2.min.css') ?>" rel="stylesheet">

<!--===============================================================================================-->	
	<!-- <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css"> -->
	<link href="<?php echo base_url('assets/daterangepicker/daterangepicker.css') ?>" rel="stylesheet">

<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="css/util.css"> -->
	<link href="<?php echo base_url('css/util.css') ?>" rel="stylesheet">

	<!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
	<link href="<?php echo base_url('css/main.css') ?>" rel="stylesheet">

<!--===============================================================================================-->
</head>
<body>
	
<form action="<?php echo site_url('Login/aksi_login'); ?>" method="post">		

	<div class="container-login100" style="background-image: url('../images/bg.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username">
					<input class="input100" type="text" name="username" placeholder="username">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Sign In
					</button>
				</div>

			</form>

			
		</div>
	</div>


	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<!-- <script src="vendor/jquery/jquery-3.2.1.min.js"></script> -->
	<script src="<?php echo base_url('assets/jquery/jquery-3.2.1.min.js') ?>"></script>
<!--===============================================================================================-->
	<!-- <script src="vendor/animsition/js/animsition.min.js"></script> -->
	<script src="<?php echo base_url('assets/animsition/js/animsition.min.js') ?>"></script>
<!--===============================================================================================-->
	<!-- <script src="vendor/bootstrap/js/popper.js"></script> -->
	<script src="<?php echo base_url('assets/bootstrap/js/popper.js') ?>"></script>

	<!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<!--===============================================================================================-->
	<!-- <script src="vendor/select2/select2.min.js"></script> -->
	<script src="<?php echo base_url('assets/select2/select2.min.js') ?>"></script>
<!--===============================================================================================-->
	<!-- <script src="vendor/daterangepicker/moment.min.js"></script> -->
	<script src="<?php echo base_url('assets/daterangepicker/moment.min.js') ?>"></script>

	<!-- <script src="vendor/daterangepicker/daterangepicker.js"></script> -->
	<script src="<?php echo base_url('assets/daterangepicker/daterangepicker.js') ?>"></script>
<!--===============================================================================================-->
	<!-- <script src="vendor/countdowntime/countdowntime.js"></script> -->
	<script src="<?php echo base_url('assets/countdowntime/countdowntime.js') ?>"></script>
<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->
	<script src="<?php echo base_url('js/main.js') ?>"></script>
</form>
</body>
</html>