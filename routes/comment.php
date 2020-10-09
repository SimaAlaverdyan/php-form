<?php
include 'connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM posts JOIN users ON posts.user_id = users.id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$sql2 = "SELECT * FROM posts";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);

$sql3 = "SELECT * FROM comments JOIN posts ON comments.post_id = posts.id";
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($result3);

if (isset($_POST['commentbtn']) and !empty($_POST['comment'])) {
    $post_id = $row3['id'];
    $user_id = $row['user_id'];
    $comment = $_POST['comment'];

    $sql1 = "INSERT INTO comments(post_id, user_id, comment)
            VALUES('$post_id', '$user_id', '$comment')";

    if (mysqli_query($conn, $sql1)) {
        echo "<script>alert('added')</script>";
    } else {
        echo "<script>alert('nooooo')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Comments</title>
</head>

<body>
    <div class="container cont2">
        <?php
        include 'menu.php';
        ?>
        <form method="post">
            <div class="row justify-content-center">
                <div class="row col-md-3">
                    <img src="<?php echo '/form/assets/images/' . $row['image'] ?>" height="150px">
                </div>
                <div class="row col-md-4">
                    <div class="form-group">
                        <h2><?php echo $row['title'] ?></h2>
                        <h5><?php echo $row['content'] ?></h5>
                        <p><?php echo $row['name'] . " " . $row['surname'] ?></p>
                        <p><?php echo $row['date'] ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                while ($row3 = mysqli_fetch_assoc($result3)) {
                ?>
                    <!-- <form action="post"> -->
                    <img src="<?php echo '/form/assets/images/' . $row3['image'] ?>" height="50px">
                    <p><?php echo $row3['comment'] ?></p>
                    <!-- </form> -->
                <?php
                }
                ?>
            </div>
            <div class="row col-md-9 justify-content-center">
                <input type="text" name="comment" size="60">
                <button type="submit" name="commentbtn" class="btn btn-success">Add</button>
            </div>
        </form>
    </div>
</body>

</html>