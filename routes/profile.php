<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/form/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/form/assets/css/style.css">
	<title>Profile Page</title>
	<style>
		h1 {
			text-align: center;
			color: wheat;
			margin-top: 30px;
		}
		h3{
			text-align: center;
			color: lightblue;
		}
	</style>
</head>

<body>
	<h1>Welcome!</h1>
	<h3>
		<?php echo $row['name'] . " " . $row['surname']; ?>
	</h3>
</body>

</html>