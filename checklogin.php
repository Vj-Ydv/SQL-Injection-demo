<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title>checklogin</title>

      <style>
       table, tr, th, td{
           /* border: 1px solid;
            border-collapse: collapse;
            border-spacing: 0px;
            
            text-align: center;
            */
            border-color: darkviolet;
            padding:8px;
        }
       #myTable {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ddd;
        font-size: 18px;
        }

        #myTable th, #myTable td {
            text-align: left;
            padding: 8px;
        }

        th{
            background-color: darkviolet;
            color:white;
        }
        #myTable tr {
            border-bottom: 1px solid #ddd;
            }

        #myTable tr.header, #myTable tr:hover {
            background-color: #f1f1f1;
        }

        #hackers_list {
        border-collapse: collapse;
        width: 600px;
        border: 1px solid #ddd;
        font-size: 18px;
        }

        #hackers_list th, #hackers_list td {
            text-align: left;
            padding: 8px;
            color: white;
        }

        #hackers_list th{
           background-color: black;
           color:white;
        }
    
        #myTable tr {
            border-bottom: 1px solid #ddd;
            }

        #myTable tr.header, #myTable tr:hover {
            background-color: #f1f1f1;
        }

        button {
          background-color: #04AA6D;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          height: 45px;
          width:326px;
          font-size: 20px;
        }

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
  background-color: orangered;

}

.vl {
  border-left: 6px solid green;
  height: 150px;
}

.left{
  float: left;
  padding: 20px;
  width:40% ;
  height: 100px;
  background-color: brown;
  border: 6px solid green;
}

.right{
  float: left;

  width: 50%;
  height: 300px;
  background-color: black;
  border: 5px solid darkred;
}

.btn{
  width: 60px;
  height: 30px;
  font: 10px;
  padding: 5px;
}

#name_form{
  border: green;
}
    </style>

    </head>
    <body>
      <h1>Congratulation, you have successfully logged in !!!</h1>
      <h3>Here are the credentials that are visible to you now.</h3>

    <?php
        include('connection.php');
        $tbl_name="members"; 

        #mysql_connect("$servername", "$dbusername", "$dbpassword")or die("Spajanje bezuspješno");
        #mysql_select_db("$dbname")or die("Selektrianje baze bezuspješno");

       $myusername=$_POST['myusername'];
       $mypassword=$_POST['mypassword'];

       $submit_value=$_POST['login'];


       #sql statement with SQL injection vulnerability
        if($submit_value=="unsafe"){
          $sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";

          $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
        }

        #SQL statement with NO SQL injection vulnerability
        else{
          $sql=$conn->prepare("SELECT * FROM $tbl_name WHERE username=? and password=?");
          $sql->bind_param("ss", $myusername, $mypassword);
          $sql->execute();

          $result=$sql->get_result();

        }
        $count=mysqli_num_rows($result);
        
    ?>
          <table id="myTable">
              <thead>
                  <tr>
                      <th>SN</th>
                      <th>Username</th>
                      <th>Password </th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                    $snn=1;
                     if($count>=1){
                        while($row=mysqli_fetch_assoc($result)){
                          $newusername=$row['username'];
                          $newpassword=$row['password']; 
                  ?>
                          <tr>
                            <td><?php echo $snn++ ?></td>
                            <td><?php echo $newusername ?></td> 
                            <td><?php echo $newpassword ?></td>
                          </tr>
                    <?php
                        }
                      }

                    else{
                      header("location:login_failed.php"); 
                      #echo "hello";
                    }
                  ?>

                    
        
              </tbody>
         </table>

    <a href="hackers_list.php"><button class="btn" target="_blank">>></button></a>
      
<?php
    
    #if($count==1){
     # $_SESSION['myusername'] = $myusername;
     # $_SESSION['mypassword'] = $mypassword;
      #header("location:welcome.php");
      #echo $count
      #echo $submit_value;

   # }
    #else {
     # header("location:login_failed.php"); 
      #echo $count;

   # }
?>



    </body>
</html>