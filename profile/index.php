<?php include 'functions/func.php'; ?>
<?php if(!isset($_SESSION['user_id'])): ?>
	<?php $_SESSION['unathorized'] = "Please Enter Email and Password"; ?>
	<?php header("location:../index.php"); ?>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/profile.css">
</head>
<body>
	<?php include '../parts/nav.php'; ?>
	<div class="container contents">
		<div class="row">
			<div class="col-md-3">
				<div class="left-area">
					<?php links(); ?>
				</div> <!-- End left-area -->
			</div> <!-- End col-3 -->
			<div class="col-md-9">
				<div class="right-area">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					<!-- === Modal === -->
					<div class="modal fade" id="bio" tabindex="-1" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Add Bio</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="close">
										<span aria-hidden="true">&times;</span>
									</button> 
								</div> <!-- modal-header --> 
								<div class="modal-body">
									<form action="">
										<div class="form-group">
											<textarea class="form-control" id="bio" cols="30" rows="10" placeholder="Add Bio..."></textarea>
										</div> <!-- end form-group -->
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-success">Add</button> 
										</div>  <!-- end modal-footer -->
									</form>
								</div> <!-- end modal-body --> 
							</div> <!-- end modal-content --> 
							
						</div> <!-- End modal dialog --> 
						
					</div> <!-- End modal --> 
				</div> <!-- End right-area -->
			</div> <!-- End col-9 -->		
		</div> <!-- End row -->
	</div> <!-- End Container -->

	<script
  	src="https://code.jquery.com/jquery-3.3.1.js"
  	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
</body>
</html>