<?php
$conn = mysqli_connect("test.loc", "root", "", "logindb");

if (!$conn) {
    die('Could not connect');
}
// echo 'Connected successfully';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<title>Login In Or Sign In</title>
</head>

<body>
	<div class="container cont1">
		<div class="row loginrow">
			<form action="index.php" method="post">
				<div class="form-group">
					<label>Login Or Email</label>
					<input type="text" class="form-control" name="email">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password">
				</div>
				<button type="submit" name="loginbtn" class="btn btn-primary">Log In</button>
				<button type="submit" name="registerbtn" class="btn btn-success">
					<a href="routes/register.php">Sign Up</a>
				</button>
			</form>
		</div>
	</div>
</body>

</html>