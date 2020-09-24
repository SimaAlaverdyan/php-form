<?php
$conn = mysqli_connect("test.loc", "root", "", "logindb");

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($conn) {
    $image = $row['image'];
    $name = $row['name'];
    $sname = $row['surname'];
    $email = $row['email'];
    $date = $row['date'];
    $phone = $row['phone'];
    $message = $row['message'];
    // $gender = $row['gender'];

    // if (isset($_POST['removebtn'])) {
    //     $newimage = 'avatar.png';
    // }

    if (isset($_POST['updatebtn'])) {
        $newimage = $_FILES['avatar']['name'];
        $newName = $_POST['name'];
        $newSname = $_POST['surname'];
        $newEmail = $_POST['email'];
        $newDate = $_POST['date'];
        $newPhone = $_POST['phone'];
        $newMessage = $_POST['message'];
        // $newgender = $_POST['gender'];

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
} else {
    echo "Connection Error";
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
    <title>Profile Page</title>

</head>

<body>
    <div class="container profilecont">
        <?php include 'menu.php'; ?>
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-3 imagegroup">
                    <img src=<?php echo '../assets/images/' . $row['image'] ?> class="img">
                    <!-- <input type="file" name="avatar"> -->
                    <h2>
                        <?php echo $name, " ", $sname; ?>
                    </h2>
                    <h3>
                        <?php echo $email; ?>
                    </h3>
                </div>
                <div class="form-group col-md-9">
                    <h1 class="profileh1">Your Profile</h1>
                </div>
            </div>

            <!-- <div class="row">
                <button type="submit" name="removebtn">Remove Image</button>  
            </div> -->
            <div class="row justify-content-center">
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
                    <input type="date" class="form-control" name="date" value="<?php echo $sname ?>">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="form-group col-md-4">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" maxlength="8" value="<?php echo $phone ?>">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="form-group col-md-4">
                    <label>Message</label>
                    <textarea class="form-control" name="message" cols="10" rows="5"><?php echo $message ?></textarea>
                </div>
            </div>
            <div class="row col-md-4 btnrow">
                <button type="submit" name="updatebtn">Update</button>
            </div>
        </form>
    </div>
</body>

</html>