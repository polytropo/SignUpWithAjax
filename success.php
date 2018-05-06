<?php session_start(); ?>
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
	<div class="container main">
		<div class="row">
			<div class="col-md-12">
				<div class="success-area">
					<?php if(isset($_SESSION['email'])): ?>
						<?php echo "Hi <strong><i class='fa fa-check-circle'></i> " . $_SESSION['email'] . "</strong> Welcome to our website we are glad you joined us! <a href='index.php'>Now you only need to Login</a>"; ?>
					<?php endif; ?>
					<?php unset($_SESSION['email']); ?>
				</div> <!-- Success area end -->
			</div> <!-- Col end -->
		</div> <!-- Row end -->
	</div> <!-- Container end -->
	<script
  	src="https://code.jquery.com/jquery-3.3.1.js"
  	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".success-area").fadeOut();
			$(".success-area").fadeIn(5000);
		})
	</script>
</body>
</html>