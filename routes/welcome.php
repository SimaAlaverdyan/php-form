<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<title>Welcome</title>
	<style>
		h1 {
			text-align: center;
			color: wheat;
			margin-top: 30px;
		}
		h3{
			text-align: center;
			color: indianred;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row justify-content-between row1">
			<div class="menudiv">
				<ul class="menu">
					<li><a href="welcome.php">menu</a></li>
					<li><a href="welcome.php">menu</a></li>
					<li><a href="welcome.php">menu</a></li>
					<li><a href="welcome.php">menu</a></li>
				</ul>
			</div>
			<div class="dropdown user">
				<a href="profile.php"><img src="<?php echo $row['image'] ?>"></a>
				<div class="dropdown-content">
					<a href="profile.php?id=<?php echo $row['id']?>">Profile</a>
					<a href="profile.php">Settings</a>
					<a href="/form/index.php">LogOut</a>
				</div>
			</div>
		</div>
	</div>
	<h1>Welcome!</h1>
	<h3>
	<?php
	echo $row['name'] . " " . $row['surname'];
	?>
	</h3>
	<?php
	// $img = substr($row['image'], 0, -10);
	// echo "<img src='$img' class='img'>";
	?>
</body>

</html>