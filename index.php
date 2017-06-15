<!DOCTYPE html>
<html>
<head>
	<title>Flames</title>

	<!-- <link rel="stylesheet" type="text/css" href="css/normalize.css"> -->
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="container">
	<h1>FLAMES</h1>
	<form method="POST">
		<div class="row">
			<div class="six columns">
				<label>Enter Name: </label>
				<input id="names" type="text" name="name1" placeholder="Enter First Name...">
			</div>
			<div class="six columns">
				<label>Enter Name: </label>
				<input id="names" type="text" name="name2" placeholder = "Enter Second Name...">
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<input class="button-primary" type="submit" name="submit" value="Check">
			</div>
		</div>
	</form>

	<?php 

	require_once 'flames.php';
	require_once 'date_conversion.php';
	?>


</div>
</body>
</html>