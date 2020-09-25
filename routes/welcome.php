<?php
$conn = mysqli_connect("test.loc", "root", "", "logindb");

if ($conn) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM users WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
} else {
	echo "connection error";
}
mysqli_close($conn);
?>
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

		h3 {
			text-align: center;
			color: indianred;
		}
	</style>
</head>
<script>
    window.history.forward();
</script>
<body>
	<div class="container ">
		<?php 
		include 'menu.php'; 
		?>
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
	</div>
</body>

</html>