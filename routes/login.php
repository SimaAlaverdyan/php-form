<?php
include 'connection.php';

if (isset($_POST['loginbtn'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$hashPassword = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email = '$email'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$id = $row['id'];

	if (!empty($email) and !empty($password) and $row['email'] == $email and $row['password'] == $hashPassword) {
		header("Location: http://test.loc/form/routes/news.php?id={$id}");
	} else {
		echo '<script type="text/javascript">alert("Incorrect Email or Password");</script>';
		echo '<script type="text/javascript">document.location = "http://test.loc/form/" </script>';
	}
} else {
	die('Connection error');
}
mysqli_close($conn);
