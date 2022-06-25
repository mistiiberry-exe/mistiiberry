<?php
error_reporting(0);
include("connection.php");

$app=$_GET['id'];
$query="DELETE FROM pgregistration WHERE app_no='$app'";
$data=mysqli_query($conn,$query);
if($data){
    echo "<script>alert('Record Deleted')</script>";;

}else{
    echo "<script>alert('Something Wrong')</script>";
}
?>