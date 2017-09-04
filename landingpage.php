<?php 
// for at start en session = session_start 
session_start(); ?>

<!doctype html>

<html lang="en">
<head>


<!-- using php include to seperate/organize code -->
<?php include('include/head.php'); ?>
<title>Landingpage</title>
</head>
<body>

<div class="grid grid-pad"><!-- simplegrid - responsive -->
	<div class="container col-6-12 push-3-12">

			
			<!-- Informationen vist i BODY'en er synlig for alle -->
			<div class="col-1-1 visible">
				<h1>Do you want to know a secret?</h1>
			</div>
		
			
			<div class="col-1-1 invisible">
			<?php
				/* dette derimod er kun synligt for brugere, som er logget ind vha if-else statement + session */
				if(empty($_SESSION['uid'])) {
					echo '<font color=red>You need to log in first!</font>';
				}
				else {
					echo 'Welcome '.$_SESSION['username'].'<br> <br>';
					echo 'You have successfully logged in! <br> <br>';

					// logger bruger ud - INITIALIZER logout.php siden idet der klikkes.
					echo "<div><a class='logout' href='logout.php'>Log out</a></div>
							";
					// image - med den lokale sti. SKAL ændres online
					echo "<img src='/semester/loginsystem/images/avatar.png' alt='error'>";
					
				}
			?>
			</div>


	</div><!-- container END -->
</div><!--grid grid pad END -->
</body>
</html>