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
	<div class="container cont">
		<div class="row justify-content-center">
			<form method="post" action="index.php">
				<div class="col">
					<h1 class="h1">Contact form</h1>
				</div>
				<div class="col">
					<h5 class="h5">Please fill in your information and we'll be sending your order in no time</h5><br>
				</div>
				<div class="form-row">
					<div class="col-md-6">
						<label>First Name</label>
						<input type="text" class="form-control" name="name" placeholder="John">
					</div>
					<div class="col-md-6">
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
					<div class="form-group col-md-3">
						<label>Male <input type="radio" name="gender" value="male"></label>
						<label>Female <input type="radio" name="gender" value="female"></label>
					</div>
				</div>
				<button type="submit" name="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
	</div>
	<?php
	if (isset($_POST['submit'])) {
		unset($_POST['submit']);
		include('routes/table.php');
	}
	?>
</body>

</html>