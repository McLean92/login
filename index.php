<?php 
/* instead of including all the PHP code on this page, I have chosen to seperate it into two pages and used include to connect them with each other. */
session_start();
require_once 'php/db_con.php';
include 'php/login-check.php';
?>



<!DOCTYPE html>

<html lang="en">

<head>
<!-- using php include to seperate/organize code -->
<?php include('include/head.php'); ?>
<title>Login page</title>	

</head>
	<body>
	



	<!-- simplegrid - responsive design -->
	<div class="grid grid-pad">

		<div class="container col-6-12 push-3-12">
				<div class="form_head">
					<h1 class="headline">LOGIN</h1>
				</div>

				<div class="img"> 
				<div class="form_body">
				<!-- creating a form so user can login  -->
					<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">

						<!-- type = what datatype is required. Name = the connection between PHP and DB  -->
						<input class="col-6-12 push-3-12" type="text" name="un" placeholder="Username *" required>
						
						<!-- required is html validation. Makes sure user enter all fields -->
						<input class="col-6-12 push-3-12" type="password" name="pw" placeholder="Password *" required>

					
						<button class="submit col-6-12 push-3-12" type="submit" name="submit"> LOGIN </button>

						<!-- In case the login fails a message will be echoed out to the user - informing them why. -->
						<div class="col-6-12 push-3-12 usernamefail">
						<?php echo $usernamefail; ?>
						</div>

					</form>

					
					<!-- If you are not a member already, you are given the option of registring -->
					<div class="signup col-6-12 push-3-12">Not a member? 
						<a href="register.php"> Sign up now!
						</a>
					</div>
				</div><!-- form_body end -->
				</div><!-- img end -->


				<div class="form_footer">Copyright &#9400; <a href="www.portfolio.charmaine.dk" target="_blank">Charmaine McLean</a> 2017</div>

		</div><!-- container end -->

	</div>


	</body>
</html>