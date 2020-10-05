<?php
$conn = mysqli_connect("test.loc", "root", "", "logindb");

if ($conn) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM users WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	$sql1 = "SELECT * FROM posts";
	$result1 = mysqli_query($conn, $sql1);
} else {
	echo "connection error";
}
if (isset($_POST['createbtn'])) {
	header("Location: http://test.loc/form/routes/posts.php?id={$id}");
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
			color: red;
			padding: 40px;
		}
	</style>
</head>
<script>
	window.history.forward();
</script>

<body>
	<div class="container cont2">
		<?php
		include 'menu.php';
		?>
		<form method="post">
			<h1>Recent Posts</h1>
			<?php
			while ($row1 = mysqli_fetch_assoc($result1)) {
			?>
				<div class="row justify-content-center">
					<div class="row col-md-3">
						<img src="<?php echo '/form/assets/images/' . $row1['image'] ?>" height="150px">
					</div>
					<div class="row col-md-4">
						<div class="form-group">
							<h2><?php echo $row1['title'] ?></h2>
							<h5><?php echo $row1['content'] ?></h5>
							<p><?php echo $row1['firstname'] . " " . $row1['lastname'] ?></p>
							<p><?php echo $row1['date'] ?></p>
						</div>
					</div>
				</div>
			<?php
			}
			?>
			<div class="row btnrow">
				<button type="submit" name="createbtn" class="btn btn-primary">Create</button>
			</div>
		</form>
	</div>
</body>

</html>