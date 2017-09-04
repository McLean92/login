	<?php
	/* using filter_input + SANITIZE_STRING to filter the data from the input form given by the user. So in case the user has used bad characters, or made some kind of mistake - this function then helps sanitize or validate, if that was the case.  */
	if (isset($_POST['submit'])){

		$un = filter_input(INPUT_POST, 'un', FILTER_SANITIZE_STRING)
			or die('Missing/illegal username parameter');


		$pw = filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_STRING)
			or die('Missing/illegal password parameter');

			// Connecting to DB
			require_once('php/db_con.php');

			// SELECTING data FROM table in DB using placeholders
			$sql = 'SELECT idusers, pw FROM users WHERE un=?';

			// Using prepared stmt in order to avoid SQL injections
			$stmt = $con->prepare($sql);
			$stmt->bind_param('s', $un);
			$stmt->execute();
			$stmt->bind_result($uid, $upw);

			while($stmt->fetch()) {  }

			// Boolean: verifying if the id, username and password match with the entered text - and if this is the case then you get redireted to the landing.page
			if (password_verify($pw, $upw)){
				session_start();
				$_SESSION['uid'] = $uid;
				$_SESSION['username'] = $un;
				header("Location: landingpage.php");

			}
			// In case the entered data doesn't match a message is echoed to user with else stmt and variable below submit button
			else {

				$usernamefail = 'Sorry. Wrong username/password combination. Please try again!';
			
			}
			exit; 
	}


	?>
