<?php
if (isset($_POST['submit'])) {
	// echo "clicked";
	$name = $_POST['name'];
	$sname = $_POST['sname'];
	$mail = $_POST['mail'];
	$date = $_POST['data'];
	$phone = $_POST['phone'];
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
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<title>FORM</title>
</head>

<body>
	<div class="formdiv">
		<h1 class="h1">Contact form</h1>
		<h3 class="h3">Please fill in your information and we'll be sending your order in no time</h3><br>
		<form class="form-inline" action="index.php" method="post">
			<div class="form-row col-md-12 row1">
				<label class="labels">Your Name </label>
				<input type="text" class="form-control" name="name" placeholder="FirstName">
				<input type="text" class="form-control" name="sname" placeholder="SecondName"><br><br>
			</div>
			<div class="form-row col-md-12">
				<label class="labels">Your Email</label>
				<input class="form-control" type="email" name="mail" placeholder="example@gmail.com"><br><br>
			</div>
			<div class="form-row col-md-12">
				<label class="datelabel">Date</label>
				<input class="form-control " type="date" name="data">
				<label class="phonelabel">Phone</label>
				<input type="text" class="form-control" name="phone" placeholder="### ### ###"><br><br>
			</div>
			<div class="form-row col-md-12">
				<label class="commentlabel">Comment</label>
				<textarea name="comment" class="form-control" rows="5" cols="40"></textarea><br><br>
			</div>
			<div class="form-row col-md-12">
				<div class="col">
					<label class="labels">Gender</label>
				</div>
				<div class="col">
					<input type="radio" name="gender" value="male"> Male
				</div>
				<div class="col">
					<input type="radio" name="gender" value="female"> Female <br><br>
				</div>
				<div class="col">
					<input type="submit" name="submit" value="Submit" class="btn btn-success subbottom">
				</div>
			</div>
		</form>
	</div>
	<?php
	if (isset($_POST['submit'])) {
		unset($_POST['submit']);
		include('routes/table.php');
	}
	?>
</body>

</html>