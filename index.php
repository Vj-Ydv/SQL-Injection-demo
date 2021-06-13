<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>

  <style>
      /* Bordered form */
form {

}

/* Full-width inputs */
input[type=text], input[type=password] {
  font-size: 16px;
  height: 35px;
  width:400px;
  padding-left: 20px;

}

label{
  text-align: left;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  height: 45px;
  width:426px;
  font-size: 20px;
  }

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
  background-color: orangered;

}



/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 15%;
  border-radius: 20%;
}

/* Add padding to containers */
.container {
  padding: 16px;
  margin-left: auto;
  margin-right: auto;
  
}



</style>
</head>
<body>

    <form action="checklogin.php" method="post">
  <div class="login_frame" style="">
      <div class="imgcontainer">
        <img src="login.png" alt="Avatar" class="avatar">
      </div>
      
        <table class="container">

         <tr><td><label for="uname"><b>Username</b></label></td></tr>
          <tr><td><input type="text" placeholder="Enter Username" name="myusername" required></td></tr>

          <tr><td></td></tr>

          <tr><td><label for="psw"><b>Password</b></label></td></tr>

          <tr><td><input type="password" placeholder="Enter Password" name="mypassword" required></td></tr>


          <tr><td><button type="submit" name="login" value="unsafe">Unsafe Login</button></td></tr>

          <tr><td><button type="submit" name="login" value="safe">Safe Login</button></td></tr>

          <tr><td><p style="text-align: center;">All rights reserved . &COPY; 2021 Vijay Yadav</p></td></tr>

          <tr><td><a href="https://vizayyadav.blogspot.com" target="_blank"><p style="text-align: center;">Contact</p></a></td></tr>

        </table>
        
      
</div>
    </form>

</body>
</html>


