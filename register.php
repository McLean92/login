<?php
require_once 'php/db_con.php';
include 'php/register-user.php';
$userAdded = '';
$userNotAdded = '';
?>


<!DOCTYPE html>

<html lang="en">

<head>
<!-- using php include to seperate/organize code -->
<?php include('include/head.php'); ?>
<title>Signup page</title>

</head>
	<body>

	<!-- simplegrid - responsive design -->
	<div class="grid grid-pad">

		<div class="container col-6-12 push-3-12">
				<div class="form_head">
					<h1 class="headline">REGISTER</h1>
				</div>

				<div class="img">
				<div class="form_body">
				<!-- creating a form so user can login  -->
					<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">

						<!-- type = what datatype is required. Name = the connection between PHP and DB  -->
						<input class="col-6-12 push-3-12" type="text" name="un" placeholder="Username *" required>

						<!-- required is html validation. Makes sure user enter all fields -->
						<input class="col-6-12 push-3-12" type="password" name="pw" placeholder="Password *" required>

						<!-- verifying password-->
						<!--
						<input class="col-6-12 push-3-12" type="password" name="pw" placeholder="Verify password *" required> -->



						<button class="submit col-6-12 push-3-12" type="submit" name="submit"> SIGN UP </button>

						<div class="col-6-12 push-3-12 userAdded">
						<?php 	
						/* using an if-else statement to add an user, which is then echoed out in, if the user is or aren't */	

						if ($stmt->affected_rows > 0){
								echo 'user '.$un.' added :-)';
							} else {
								echo 'Could not add the user... Please try with another username.';
									} ?>
						</div>
					</form>

					<div class="signup col-6-12 push-3-12">
						<a href="index.php"> Log in now!
						</a>
					</div>

				</div><!-- form_body end -->
				</div><!-- img end -->


				<div class="form_footer">Copyright &#9400; <a href="www.portfolio.charmaine.dk" target="_blank">Charmaine McLean</a> 2017</div>

		</div><!-- container end-->

	</div>


	</body>
</html>
