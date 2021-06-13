<?php
    $host='localhost';
    $username='root';
    $password='vijay';
    $database='login_page';

    $conn=mysqli_connect($host,$username,$password,$database) or die(mysqli_error($conn));
    #echo "successfully connnected";
   
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
