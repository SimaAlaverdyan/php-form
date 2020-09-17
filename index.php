<?php
$email = $_POST['email'];
$password = $_POST['password'];

$conn = mysqli_connect("localhost", "root", "root", "logindb");
// $conn = mysqli_connect("test.loc", "root", "", "logindb");

if ($conn) {
	// echo 'Connected successfully';

	if (isset($_POST['loginbtn'])) {
		$sql = "SELECT * FROM login_tbl WHERE Email = '$email' and Password = '$password'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if ($row['Email'] == $email and $row['Password'] == $password) {
			echo "<script>alert('Log In succesfully')</script>";
		} else {
			echo "<script>alert('Incorrect Email or Password')</script>";
		}
	}
} else {
	die('Connection error');
}
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
			<form method="post">
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