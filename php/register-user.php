<?php
// Using filter_input + FILTER SANITIZE STRING to validate the data given by the user in the INPUT fields. Making sure it is the correct data to store in DB. 
if (isset($_POST['submit'])) {

	$un = filter_input(INPUT_POST, 'un', FILTER_SANITIZE_STRING)
		or die('Missing/illegal un parameter');
	$pw = filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_STRING)
		or die('Missing/illegal pw parameter');

	// using password_hash to hash the given data in the input pw field. This makes sure that the password stored in the db is unreadable even to the admin. Endrypting data. 
	$pw = password_hash($pw, PASSWORD_DEFAULT);

	echo 'Creating user '.$un.' with password: '.$pw;

	// "connecting" with the db using SQL statements and clauses
	// Using prepared statement to avoid SQL injections. Improving security with placeholders. 
	$sql = 'INSERT INTO users(un, pw) VALUES (?, ?)';
	$stmt = $con->prepare($sql);
	$stmt->bind_param('ss', $un, $pw);
	$stmt->execute();

		}
?>
