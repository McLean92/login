 





 <!DOCTYPE html>

<html lang="en">

<head>
<title>Login page</title>
<?php include('include/head.php'); ?>
	
</head>
	<body>
	<?php include('include/nav.php'); ?>
	
	<?php 

	if (filter_input(INPUT_GET, 'submit')){

		$n = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING)
			or die('Missing/illegal name parameter');


		$e = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL)
			or die('Missing/illegal email parameter');

		$a = filter_input(INPUT_GET, 'number', 
						FILTER_VALIDATE_INT,
						array('options' => array('min_range'=>0,
												'max_range'=>120)))
			/* Associativ array = options. Med */
			or die('Missing/illegal age parameter');


		echo 'Got the valid parameters: <br>';
		echo 'name : '.$n;
		echo 'email : '.$e;
		echo 'age : '.$a;
	}



	?>



	<form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">

		<label>Navn: *</label>
		<input type="text" name="name" placeholder="name" required>
		
		<label>Email: *</label>
		<input type="email" name="email" placeholder="email" required>

		<label>Alder: *</label>
		<input type="age" name="number" placeholder="age" min="0" max="120" required>

		<input type="submit" name="submit" value="valider">

	</form>


	</body>
</html>