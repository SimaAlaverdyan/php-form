<?php
    $servername = "test.loc";
    $username = "root";
    $dbname = "logindb";
    
    $conn = mysqli_connect($servername, $username, "", $dbname);
    
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>