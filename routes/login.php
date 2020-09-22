<?php
// $conn = mysqli_connect("localhost", "root", "root", "logindb");
$conn = mysqli_connect("test.loc", "root", "", "logindb");

if ($conn) {
	if (isset($_POST['loginbtn'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$hashPassword = md5($_POST['password']);

		$sql = "SELECT * FROM users WHERE email = '$email'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if (!empty($email) and !empty($password) and $row['email'] == $email and $row['password'] == $hashPassword) {
			include('profile.php');
		} else {
			// echo "<script>alert('Incorrect Email or Password')</script>";
			// header('Location: http://test.loc/form/');
			echo '<script type="text/javascript">alert("Incorrect Email or Password");</script>';
			echo '<script type="text/javascript">document.location = "http://test.loc/form/" </script>';
		}
	}
} else {
	die('Connection error');
}
