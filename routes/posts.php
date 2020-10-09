<?php
include 'connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['backbtn'])) {
    header("Location: http://test.loc/form/routes/news.php?id={$id} ");
}
if (isset($_POST['savebtn'])) {
    if (!empty($row['name']) and !empty($row['surname'])) {
        // $fname = $row['name'];
        // $sname = $row['surname'];
        // $img = $row['image'];
        $userid = $row['id'];
        $postTitle = $_POST['title'];
        $postContenct = $_POST['content'];
        $postDate = date("Y.m.d");

        $sql1 = "INSERT INTO posts (user_id, title, content, date)
            VALUES ('$userid', '$postTitle', '$postContenct', '$postDate')";

        if (mysqli_query($conn, $sql1)) {
            echo "<script>alert('New record created successfully')</script>";
            header("Location: http://test.loc/form/routes/news.php?id={$id} ");
        }
    } else {
        echo "<script>alert('Fields cannot be empty')</script>";
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
    <title>Create New Post</title>
</head>

<body>
    <div class="container cont2">
        <?php
        include 'menu.php';
        ?>
        <div class="row justify-content-center postrow">
            <form method="post">
                <div class="form-row">
                    <div class="form-group">
                        <label>Post Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Post Content</label>
                        <input type="text" class="form-control" name="content">
                    </div>
                </div>
                <div class="form-row justify-content-around">
                    <button type="submit" name="savebtn" class="btn btn-success">Save</button>
                    <button type="submit" name="backbtn" class="btn btn-primary">Back</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>