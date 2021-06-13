<?php
    $name=$_POST['hacker_name'];
    $client_ip=$_SERVER['REMOTE_ADDR'];
    $timestamp=date("m/d/Y h:i:s a", time());

    include('connection.php');
  
    $sql="insert into hackers(client_ip, name, timestamp) values('$client_ip', '$name', '$timestamp')";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    if($result==true)
    {
         header('location:hackers_list.php');
        
        
    }
    else
    {
        echo "Failed to add. This device is already registered. Trying using another device.";
    }
?>


