<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1 shrink-to-fit=no">
	<title>SignUp Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
</head>
<body>
	<?php include 'parts/nav.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-8 content">
				<h1>Its always free</h1><hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col-md-4 content">
				<!-- === SignUp Form=== -->
				<div class="signup-cover">
					<div class="card"> 
						<div class="card-header">
							<div class="row">
								<div class="col-md-9">
									<h3 class="form-heading">Signup</h3>
									<p>Account creation is 100% free and will always be</p>
								</div>
								<div class="col-md-3 text-right">
									<i class="fa fa-pencil-square-o fa-3x"></i>
								</div>
							</div>
						</div>
						<div class="card-body">
							<form id="signup_submit">
								<div class="form-group show_progress">
									
								</div>
								<div class="form-group">
									<input type="text" id="name" name="name" class="form-control" placeholder="Enter Name..."></input>
									<div class="name-error error"></div>
								</div>
								<div class="form-group">
									<input type="email" id="email" name="email" class="form-control" placeholder="Enter Email..." ></input>
									<div class="email-error error"></div>
								</div>
								<div class="form-group">
									<input type="password" id="password" name="password" class="form-control" placeholder="Choose Password..."></input>
									<div class="password-error error"></div>
								</div>
								<div class="form-group">
									<input type="password" id="confirm" class="form-control" placeholder="Confirm Password..."></input>
									<div class="confirm-error error"></div>
								</div>
								<div class="form-group">
									<button type="button" id="submit" class="btn btn-success btn-block form-btn">Create Account</button>
								</div>
								<div class="form-group">
									<a href="#" id="login">Already have an account?</a>
								</div>
							</form>
						</div>	
					</div>
				</div>
				<!-- End of signup form -->
				<!-- === Login form === -->
				<div class="login-cover">
					<div class="card">
						<div class="card-header">
							<div class="row">
								<div class="col-md-9">
									<h3 class="form-heading">Login</h3>
									<p>Enter email and password</p>
								</div>
								<div class="col-md-3 text-right">
									<i class="fa fa-lock fa-3x"></i>
								</div>
							</div>
						</div>
						<div class="card-body">
							<form id="login-submit-form">
								<div class="form-group">
									<div class="login-error error"></div>
								</div>
								<div class="form-group">
									<input type="email" id="login-email" name="login_email" class="form-control" placeholder="Enter Email..."></input>
									<div class="login-email-error error"></div>
								</div>
								<div class="form-group">
									<input type="password" id="login-password" name="login_password" class="form-control" placeholder="Choose Password..."></input>
									<div class="login-password-error error"></div>
								</div>
								<div class="form-group">
									<button type="button" id="login-submit" class="btn btn-success btn-block form-btn">Login</button>
								</div>
								<div class="form-group">
									<a href="#" id="signup">Create New Account?</a>
								</div>
							</form>
						</div>	
					</div>
				</div>
				<!-- End of login form -->
			</div>
		</div>
	</div>

	<script
  	src="https://code.jquery.com/jquery-3.3.1.js"
  	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="assets/js/simple.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="assets/js/valid.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="assets/js/signup.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="assets/js/login.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>