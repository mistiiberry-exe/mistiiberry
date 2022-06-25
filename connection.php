<?php
   error_reporting (E_ALL ^ E_NOTICE); 
   $conn = mysqli_connect('localhost','root','','ug');
   if($conn){
  // echo "connected";
   }else{
      echo " Connection failed";
   }
  
?>