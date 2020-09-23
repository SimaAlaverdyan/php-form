<?php
$conn = mysqli_connect("test.loc", "root", "", "logindb");

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$image = $row['image'];
$name = $row['name'];
$sname = $row['surname'];
$email = $row['email'];
$password = $row['password'];
$date = $row['date'];
$phone = $row['phone'];
$message = $row['message'];
$gender = $row['gender'];

if (isset($_POST['updatebtn'])) {
    $newimage = '../assets/images/' . $_FILES['avatar']['name'];

    $sql1 = "UPDATE users SET image = '$newimage' WHERE id = '$id'";

    if (mysqli_query($conn, $sql1)) {
        echo "<script>alert('updated')</script>";
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

    <style>
        .img {
            height: 200px;
        }
    </style>
</head>

<body>
    <div class="container profilecont">
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-5">
                    <img src=<?php echo $row['image'] ?> class="img">
                    <input type="file" name="avatar">
                </div>
                <h1>Your Profile</h1>
            </div>
            <div class="row justify-content-center">
                <div class="form-group col-md-4">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="name" placeholder="<?php echo $name ?>">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="form-group col-md-4">
                    <label>Second Name</label>
                    <input type="text" class="form-control" name="surname" placeholder="<?php echo $sname ?>">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="form-group col-md-4">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="<?php echo $email ?>">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="form-group col-md-4">
                    <label>Date</label>
                    <input type="date" class="form-control" name="date" placeholder="<?php echo $sname ?>">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="form-group col-md-4">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" maxlength="8" placeholder="<?php echo $phone ?>" >
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="form-group col-md-4">
                    <label>Messege</label>
                    <textarea class="form-control" name="message" cols="10" rows="5" placeholder="<?php echo $message ?>"></textarea>
                </div>
            </div>
            <button type="submit" name="updatebtn">Update</button>
        </form>
    </div>
</body>

</html>