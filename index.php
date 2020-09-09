<?php
if (isset($_POST['submit'])) {
	// echo "clicked";
	$name = $_POST['name'];
	$sname = $_POST['sname'];
	$date = $_POST['data'];
	$comment = $_POST['comment'];
	$gender = $_POST['gender'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>FORM</title>
</head>

<body>
	<div class="formdiv">
		<h1>Contact form</h1>
		<h3>Please fill in your information and we'll be sending your order in no time</h3><br>
		<form class="myform" action="index.php" method="post">
			<label class="labels">Your Name </label>
			<input type="text" name="name" placeholder="FirstName">
			<input type="text" name="sname" placeholder="SecondName"><br><br>
			<label class="labels">Your Email</label>
			<input type="email" name="name" placeholder="example@gmail.com"><br><br>
			<label class="labels">Date</label>
			<input type="date" name="data">
			<label class="labels">Phone</label>
			<input type="text" name="phone" placeholder="### ### ###"><br><br>
			<label class="labels">Comment</label>
			<textarea name="comment" rows="5" cols="40"></textarea><br><br>
			<label class="labels">Gender</label>
			<input type="radio" name="gender" value="male"> Male
			<input type="radio" name="gender" value="female"> Female <br><br>
			<input type="submit" name="submit" value="Submit">
		</form>
	</div>
	<?php
	if (isset($_POST['submit'])) {
		echo "<h1>RESULT</h1>";
		echo "Name: " . $name . "<br>";
		echo "Surname: " . $sname . "<br>";
		echo "Date:" . $date . "<br>";
		echo "Comment: " . $comment . "<br>";
		echo "Gender: " . $gender;
	}
	?>
</body>

</html>