<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="shortcut icon" href="/assets/images/icons/aratek-logo.png" type="image/x-icon">
	<link rel="stylesheet" href="/assets/styles/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/assets/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="/assets/vendor/animate/animate.css">
	<link rel="stylesheet" href="/assets/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" href="/assets/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" href="/assets/vendor/select2/select2.min.css">
	<link rel="stylesheet" href="/assets/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="/assets/styles/login-util.css">
	<link rel="stylesheet" href="/assets/styles/login-main.css">

	<title>Register | Aratek</title>
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../assets/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="/register" method="POST" class="login100-form validate-form">
					@csrf
					<span class="login100-form-title p-b-49">
						Register
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Name is required">
						<span class="label-input100">Name</span>
						<input class="input100" type="text" name="name" placeholder="Type your Name">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "E-Mail is reauired">
						<span class="label-input100">E-Mail</span>
						<input class="input100" type="email" name="email" placeholder="Type your E-Mail">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="container-login100-form-btn mt-3">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Register
							</button>
						</div>
					</div>

					<div class="flex-col-c">
						<span class="txt1 p-b-17 mt-2">
							Already have account?
						</span>

						<a href="/login" class="txt2">
							Sign In
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>
	
	<script src="/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="/assets/vendor/animsition/js/animsition.min.js"></script>
	<script src="/assets/scripts/bootstrap.bundle.min.js"></script>
	<script src="/assets/vendor/select2/select2.min.js"></script>
	<script src="/assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="/assets/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="/assets/vendor/countdowntime/countdowntime.js"></script>
	<script src="/assets/scripts/login-main.js"></script>
</body>
</html>