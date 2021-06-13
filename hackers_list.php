<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Hackers list</title>

  <style>
  #hackers_list {
        border-collapse: collapse;
        width: 100%;
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
           color:orangered;
           font-size: 23px;
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

        button:hover {
          opacity: 0.8;
          background-color: orangered;

          }


      .top{
        padding: 20px;
        width:40% ;
        height: 170px;
        border: 2px dashed green;
      }

      .down{
        
        width: 95%;
        padding: 20px;

        height: 300px;
        background-color: black;
        border: 5px solid green;
      }

      h1{
        color: brown;
}
</style>
</head>
<body>


<h1>Add yourself</h1><br>

 <?php
          include('connection.php');

          $sql1="SELECT * FROM hackers";
          $result1=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
          $count1=mysqli_num_rows($result1);
          

    ?>

      
        <div class="top">
          <form action="add_action.php" method="post">

            <input style="font-size: 16px; height: 35px; width:300px; padding-left: 20px;" type="text" placeholder="Enter Username" name="hacker_name" required><br><br>
             <button type="submit" name="add" value="add">Add</button>
             <p style="color:red;">* One name can only be added from a particular device.</p>
          </form>
        </div>
<br><br>
        <div class="down">
          <table id="hackers_list">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Timestamp</th>
                        
                    </tr>
                </thead>
                <tbody>
                  <?php
                    $sn1=1;
                     if($result1==true){
                        while($row=mysqli_fetch_assoc($result1)){
                          $name=$row['name'];
                          $timestamp=$row['timestamp']; 
                          $ip=$row['client_ip'];
                     
                  ?>
                          <tr>
                            <td><?php echo $sn1++ ?></td>
                            <td><?php echo $name ?></td> 
                            <td><?php echo $timestamp ?></td>
                          </tr>
                    <?php
                        }
                    }
                      
                    ?>
                </tbody>
          </table>
          
        </div>
      


</body>
</html>

