<div class="row justify-content-between row1">
    <div class="menudiv">
        <ul class="menu">
            <li><a href="welcome.php?id=<?php echo $id ?>">menu</a></li>
            <li><a href="welcome.php?id=<?php echo $id ?>">menu</a></li>
            <li><a href="welcome.php?id=<?php echo $id ?>">menu</a></li>
            <li><a href="welcome.php?id=<?php echo $id ?>">menu</a></li>
        </ul>
    </div>
    <div class="dropdown user">
        <a href="profile.php?id=<?php echo $row['id'] ?>"><img src="<?php echo '../assets/images/' . $row['image'] ?>"></a>
        <div class="dropdown-content">
            <a href="profile.php?id=<?php echo $row['id'] ?>">Profile</a>
            <a href="profile.php?id=<?php echo $row['id'] ?>">Settings</a>
            <a href="/form/index.php">LogOut</a>
        </div>
    </div>
</div>