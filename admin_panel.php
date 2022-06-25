<?php
   error_reporting(0);
   include("connection.php");
   session_start();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <style>
        div.header{
            font-family: poppings;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px 60px;
            background-color: rgb(209, 235, 176) ;
        }
        div.header button{
            background-color: white;
            font-size: 15px;
            font-weight: 500;
            padding: 8px 12px;
            border: 2px solid black;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <DIV CLASS="header">
    <h1>WELCOME TO ADMIN PANEL</h1>
    <form method="POST">
    <BUTTon name="logout">LOG OUT</BUTTon>
    </form>
    </DIV>

    <?php
       if(isset($_POST['logout'])){
           session_destroy();
           header("location: adminlog.php");
       }   
    ?>
     <div style="font-size:20px;padding-left:50px;padding-top:60px">
    <a href="admin_ug.php">Click here for UG hons addmission application details</a><BR></BR>
    <a href="admin_gen.php">Click here for UG general addmission application details</a><BR></BR>
    <a href="admin_pg.php">Click here for PG hons addmission application details</a><BR></BR>
</div>
    </body>
    </html>