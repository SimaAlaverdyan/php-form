<?php
include 'connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$image = $row['image'];
$name = $row['name'];
$sname = $row['surname'];
$email = $row['email'];
$date = $row['date'];
$phone = $row['phone'];
$message = $row['message'];

if (isset($_POST['updatebtn'])) {
    $newimage = $_FILES['avatar']['name'];
    $newName = $_POST['name'];
    $newSname = $_POST['surname'];
    $newEmail = $_POST['email'];
    $newDate = $_POST['date'];
    $newPhone = $_POST['phone'];
    $newMessage = $_POST['message'];

    if (empty($newimage)) {
        $newimage = $image;
    }
    if (empty($newName)) {
        $newName = $name;
    }
    if (empty($newSname)) {
        $newSname = $sname;
    }
    if (empty($newEmail)) {
        $newEmail = $email;
    }
    if (empty($newDate)) {
        $newDate = $date;
    }
    if (empty($newPhone)) {
        $newPhone = $phone;
    }
    if (empty($newMessage)) {
        $newMessage = $message;
    }

    if (
        !empty($newimage) || !empty($newName) || !empty($newSname) || !empty($newEmail)
        || !empty($newDate) || !empty($newPhone) || !empty($newMessage)
    ) {
        $sql1 = "UPDATE users SET name = '$newName', surname = '$newSname',
                                email = '$newEmail', date = '$newDate', phone = '$newPhone',
                                message = '$newMessage', image = '$newimage' 
                WHERE id = '$id'";
        if (mysqli_query($conn, $sql1)) {
            echo "<script>alert('updated')</script>";
            header("Location: http://test.loc/form/routes/profile.php?id={$id}");
        }
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
    <title>Profile Page</title>
</head>
<script>
    window.history.forward();
</script>

<body>
    <div class="container profilecont">
        <?php
        include 'menu.php';
        ?>
        <form method="post" enctype="multipart/form-data">
            <div class="row col-md-12">
                <div class="col-md-4">
                    <div class="form-group col-md-4 imagegroup">
                        <img src=<?php echo '../assets/images/' . $row['image'] ?> class="img">
                        <input type="file" name="avatar">
                    </div>
                    <h2 class="profileh2">
                        <?php echo $name, " ", $sname; ?>
                    </h2>
                </div>
                <div class="col-md-8">
                    <div class="row justify-content-center">
                        <div class="form-group col-md-12">
                            <h1 class="profileh1">Your Profile</h1>
                        </div>
                        <div class="form-group col-md-4">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Second Name</label>
                            <input type="text" class="form-control" name="surname" value="<?php echo $sname ?>">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-md-4">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $email ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Date</label>
                            <input type="date" class="form-control" name="date" value="<?php echo $date ?>">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-md-4">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" maxlength="8" value="<?php echo $phone ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Message</label>
                            <textarea class="form-control" name="message" cols="10" rows="5"><?php echo $message ?></textarea>
                        </div>
                    </div>
                    <div class="row col-md-4 btnrow">
                        <button type="submit" name="updatebtn">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>