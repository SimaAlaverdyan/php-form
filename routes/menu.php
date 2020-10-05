<div class="row justify-content-between row1">
    <div class="menudiv">
        <ul class="menu">
            <li><a href="news.php?id=<?php echo $id ?>">News</a></li>
            <li><a href="profile.php?id=<?php echo $row['id'] ?>">Profile</a></li>
            <li><a href="profile.php?id=<?php echo $row['id'] ?>">Settings</a></li>
            <li><a href="../index.php">Log Out</a></li>
        </ul>
    </div>
    <div class="user">
        <a href="profile.php?id=<?php echo $row['id'] ?>"><img src="<?php echo '/form/assets/images/' . $row['image'] ?>"></a>
        <!-- '../assets/images/' -->
        <!-- <div class="dropdown-content">
            <a href="profile.php?id=">Profile</a>
            <a href="profile.php?id=">Settings</a>
            <a href="../index.php">LogOut</a>
        </div> -->
    </div>
</div>