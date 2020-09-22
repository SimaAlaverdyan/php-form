<?php
// $conn = mysqli_connect("localhost", "root", "root", "logindb");
$conn = mysqli_connect("test.loc", "root", "", "logindb");

if ($conn) {
	if (isset($_POST['submitbtn'])) {
		$name = $_POST['name'];
		$sname = $_POST['surname'];
		$mail = $_POST['mail'];
		$password = $_POST['password'];
		$date = $_POST['date'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		$gender = $_POST['gender'];
		$avatar = '../assets/images/' . $_FILES['avatar']['name'] . time();

		if (!empty($name) and !empty($sname) and !empty($mail) and !empty($password)) {

			$password = md5($_POST['password']);

			$sql = "INSERT INTO users (name, surname, email, password, date, phone, message, gender, image)
				VALUES ('$name', '$sname', '$mail', '$password', '$date', '$phone', '$message', '$gender', '$avatar')";
			if (mysqli_query($conn, $sql)) {
				echo "<script>alert('New record created successfully')</script>";
			}
		} else {
			// echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			echo "<script>alert('Fields cannot be empty')</script>";
		}
		mysqli_close($conn);
	}
} else {
	// echo "<script>alert('Something went wrong')</script>";
	die('Connection error');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<title>Create Your Account</title>
</head>

<body>
	<div class="container cont">
		<div class="row justify-content-center">
			<form method="post" enctype="multipart/form-data">
				<div class="col">
					<h1 class="h1">Contact form</h1>
				</div>
				<div class="col">
					<h5 class="h5">Please fill in your information and we'll be sending your order in no time</h5><br>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>First Name</label>
						<input type="text" class="form-control" name="name" placeholder="John">
					</div>
					<div class="form-group col-md-6">
						<label>Second Name</label>
						<input type="text" class="form-control" name="surname" placeholder="Smith">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Email</label>
						<input type="email" class="form-control" name="mail" placeholder="example@gmail.com">
					</div>
					<div class="form-group col-md-6">
						<label>Password</label>
						<input type="password" class="form-control" name="password">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Date </label>
						<input type="date" class="form-control" name="date">
					</div>
					<div class="form-group col-md-3">
						<label>Country</label>
						<select class="form-control" name="country-code">
							<option selected>Choose</option>
							<option>+374</option>
							<option>+7</option>
						</select>
					</div>
					<div class="form-group col-md-3">
						<label>Phone </label>
						<input type="text" class="form-control" name="phone" maxlength="8" placeholder="## ### ###" >
					</div>
				</div>
				<div class="form-group">
					<label>Message</label>
					<textarea class="form-control" name="message" cols="10" rows="5"></textarea>
				</div>
				<div class="form-row">
					<div class="col-md-2">
						<label>Gender</label>
					</div>
					<div class="form-group col-md-3">
						<label>Male <input type="radio" name="gender" value="male" checked="checked"></label>
						<label>Female <input type="radio" name="gender" value="female"></label>
					</div>
					<div class="form-group col-md-5">
						<input type="file" name="avatar">
					</div>
				</div>
				<button type="submit" name="submitbtn" class="btn btn-success">Submit</button>
				<button type="submit" name="login" class="btn btn-primary">
					<a href="/form/index.php" class="log_a">Log In</a>
				</button>
			</form>
		</div>
	</div>
	<?php
	// if (isset($_POST['submit'])) {
	// 	unset($_POST['submit']);
	//include('routes/table.php');
	// }
	?>
</body>

</html>