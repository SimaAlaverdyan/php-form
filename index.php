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
		<h1>Contact form</h1>
		<h4>Please fill in your information and we'll be sending your order in no time</h4><br>
		<!-- <form class="form-inline" action="index.php" method="post">
			<div class="form-row">
				<div class="form-group col-lg-12 col-md-6">
					<label class="labels">Your Name </label>
					<input type="text" class="form-control" name="name" placeholder="FirstName">
					<input type="text" class="form-control" name="sname" placeholder="SecondName"><br><br>
				</div>
			</div>
			<div class="form-group col-lg-12 col-md-12">
				<label class="labels">Your Email</label>
				<input type="email" class="form-control" name="mail" placeholder="example@gmail.com"><br><br>
			</div>
			<div class="form-group col-lg-12 col-md-12">
				<label class="datelabel">Date</label>
				<input class="form-control " type="date" name="data">
				<label class="phonelabel">Phone</label>
				<input type="text" class="form-control" name="phone" placeholder="### ### ###"><br><br>
			</div>
			<div class="form-group col-lg-6 col-md-12">
				<label class="commentlabel">Comment</label>
				<textarea name="comment" class="form-control" rows="5" cols="40"></textarea><br><br>
			</div>
			<div class="form-row col-lg-6 col-md-12">
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
		</form> -->
		<form method="post" action="index.php">
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
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="mail" placeholder="example@gmail.com">
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label>Date</label>
					<input type="date" class="form-control" name="date">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-3">
					<label>Country</label>
					<select class="form-control" name="country-code">
						<option selected>Choose</option>
						<option>+374</option>
						<option>+7</option>
					</select>
				</div>
				<div class="form-group col-md-3">
					<label>Phone</label>
					<input type="text" class="form-control" name="phone" placeholder="### ### ###">
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
				<div class="col-md-2">
					<input type="radio" name="gender" value="male"> Male
				</div>
				<div class="col-md-2">
					<input type="radio" name="gender" value="female"> Female
				</div>
			</div>
			<button type="submit" name="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
	<?php
	if (isset($_POST['submit'])) {
		unset($_POST['submit']);
		include('routes/table.php');
		// var_dump($_POST);
	}
	?>
</body>

</html>