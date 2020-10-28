<?php
include 'connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

//selecting all posts
$sql1 = "SELECT * FROM posts JOIN users ON posts.user_id = users.id";
$result1 = mysqli_query($conn, $sql1);

$sql2 = "SELECT id FROM posts";
$result2 = mysqli_query($conn, $sql2);

if (isset($_POST['createbtn'])) {
	header("Location: http://test.loc/form/routes/posts.php?id={$id}");
}
if (isset($_POST['commentbtn'])) {
	header("Location: http://test.loc/form/routes/comment.php?id={$id}&buttonid={$_POST['commentbtn']}");
}
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
							<p><?php echo $row1['name'] . " " . $row1['surname'] ?></p>
							<p><?php echo $row1['date'] ?></p>
						</div>
						<div class="form-group col-md-9">
							<!-- <button type="submit" name="commentbtn" id="" class="btn btn-success">
									Comment
								</button> -->
							<?php
							while ($row2 = mysqli_fetch_assoc($result2)) {
								?>
								<input type="submit" name="commentbtn" value="<?php echo $row2['id'] ?>"/>
								<!-- <button type="submit" name="commentbtn">Comment
									<input type="hidden" name="postid" value="">
								</button> -->
							<?php
								break;
							}
							?>
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