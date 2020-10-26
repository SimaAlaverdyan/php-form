<?php
include 'connection.php';

$buttonID = $_GET['buttonid'];
//for user page
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

//post's comments with user's description
$sql1 = "SELECT * FROM comments JOIN users ON comments.user_id = users.id WHERE comments.post_id = $buttonID";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);

//corrent post's comments
// $sql2 = "SELECT * FROM comments WHERE post_id = $buttonID";
// $result2 = mysqli_query($conn, $sql2);
// $row2 = mysqli_fetch_assoc($result2);

//chosen post's description 
$sql3 = "SELECT * FROM posts JOIN users ON posts.user_id = users.id WHERE posts.id = $buttonID";
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($result3);

if (isset($_POST['combtn']) and !empty($_POST['comment'])) {
    $post_id = $id;
    $user_id = $row['user_id'];
    $comment = $_POST['comment'];

    $sql4 = "INSERT INTO comments(post_id, user_id, comment)
            VALUES('$post_id', '$user_id', '$comment')";

    if (mysqli_query($conn, $sql4)) {
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
            <!-- POST'S description -->
            <div class="row justify-content-center">
                <div class="row col-md-3">
                    <img src="<?php echo '/form/assets/images/' . $row3['image'] ?>" height="150px">
                </div>
                <div class="row col-md-4">
                    <div class="form-group">
                        <h2><?php echo $row3['title'] ?></h2>
                        <h5><?php echo $row3['content'] ?></h5>
                        <p><?php echo $row3['name'] . " " . $row3['surname'] ?></p>
                        <p><?php echo $row3['date'] ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                while ($row1 = mysqli_fetch_assoc($result1)) {
                ?>
                    <img src="<?php echo '/form/assets/images/' . $row1['image'] ?>" height="50px">
                    <p><?php echo $row1['comment'] ?></p>
                <?php
                }
                ?>
            </div>
            <div class="row col-md-9 justify-content-center">
                <input type="text" name="comment" size="60">
                <button type="submit" name="combtn" class="btn btn-success">Add</button>
            </div>
        </form>
    </div>
</body>

</html>