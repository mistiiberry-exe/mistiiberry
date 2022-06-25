<?php
  require("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-form">
        <h2>Admin login</h2>
        <form method="POST">
           <div class="input-field">
               <input type="text" placeholder="Usename" name="AdminName">
           </div>
           <div class="input-field">
             <input type="text" placeholder="password" name="Adminpassword">
           </div>
           <button type="submit" name="signin">SIGN IN</button>
          <a href="home.php" style="font-size:20px;">Home</a>
        </form>
    </div>
    <?php
       if(isset($_POST['signin']))
       {
        $query="SELECT * FROM `admin_login` WHERE `Admin_name`='$_POST[AdminName]'AND`Admin_password`='$_POST[Adminpassword]'";
       $result=mysqli_query($conn,$query);
       if(mysqli_num_rows($result)==1){
           session_start();
           $_SESSION['AdminLogInId']=$_POST['AdminName'];
           header("location: admin_panel.php");
       }
       else{
           echo "<script>alert('incorrect password')</script>";
       }
       }

    ?>
</body>
</html>