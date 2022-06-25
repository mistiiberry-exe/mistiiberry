<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
  include("connection.php");
   if(isset($_POST['submit']))
   {
    $course = $_POST['course'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $bloodgroup = $_POST['bloodgroup'];
    $address = $_POST['address1'];
    $pincode = $_POST['pincode'];
    $stat = $_POST['stat'];
    $email = $_POST['email'];
    $number = $_POST['number1'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];
    $ffname = $_POST['ffname'];
    $fmname = $_POST['fmname'];
    $flname = $_POST['flname'];
    $mfname = $_POST['mfname'];
    $mmname = $_POST['mmname'];
    $mlname = $_POST['mlname'];
    $gfname = $_POST['gfname'];
    $gmname = $_POST['gmname'];
    $glname = $_POST['glname'];
    $relation = $_POST['relation'];
    $occupation = $_POST['occupation'];
    $gnum = $_POST['gnum'];
    $board = $_POST['board'];
    $schoolx = $_POST['schoolx'];
    $yearp = $_POST['yearp'];
    $marksobx = $_POST['marksobx'];
    $marksfullx = $_POST['marksfullx'];
    $marksavgx = $_POST['marksavgx'];
    $bb = $_POST['board1'];
    $schoolxii = $_POST['schoolxii'];
    $yearpxii = $_POST['yearpxii'];
    $marksobxii = $_POST['marksobxii'];
    $marksfullxii = $_POST['marksfullxii'];
    $marksavgxii = $_POST['marksavgxii'];
    $covid = $_POST['covid'];
    
    $file = addslashes(file_get_contents($_FILES["filep"]["tmp_name"]));
    $file1 = addslashes(file_get_contents($_FILES["files"]["tmp_name"]));
    $checkid = "SELECT * FROM `general` ORDER BY id DESC LIMIT 1";
    $checkres = mysqli_query($conn,$checkid);
    if(mysqli_num_rows($checkres)>0){
        if($row = mysqli_fetch_assoc($checkres)){
            $uid = $row['app_no'];
            $get_numbers = str_replace("BGCGEN","",$uid);
            $id_increase = $get_numbers+1;
            $get_string = str_pad($id_increase,4,0, STR_PAD_LEFT);
            $id = "BGCGEN".$get_string;
    $query="INSERT INTO general(app_no,course,fname,mname,lname,dob,bloodgroup,address1,pincode,stat,email,number1,religion,caste,ffname,fmname,flname,mfname,mmname,mlname,gfname,gmname,glname,relation,occupation,gnum,board,schoolx,yearp,marksobx,marksfullx,marksavgx,board1,schoolxii,yearpxii,marksobxii,marksfullxii,marksavgxii,covid,filep,files) VALUES ( '$id','$course','$fname','$mname','$lname',' $dob','$bloodgroup','$address',$pincode,'$stat','$email',$number,'$religion','$caste','$ffname','$fmname','$flname','$mfname','$mmname','$mlname','$gfname','$gmname','$glname','$relation','$occupation',$gnum,'$board','$schoolx',$yearp,$marksobx,$marksfullx,$marksavgx,'$bb','$schoolxii',$yearpxii,$marksobxii,$marksfullxii,$marksavgxii,'$covid','$file','$file1')";
    $data= mysqli_query($conn,$query);
    if($data){
    //  header("location: ug_next.php");
    ?>
       <h4 style="color:red;background-color:white;">Your form is successfully submitted</h4><br><br>
       <?php
       echo " Your Application Number is :  ".$id;
    }
    else{
        echo "<script>alert('Something Went Wrong ...TRY AGAIN')</script>";
          }
    }
    }
    else{
        $id = "BGCGEN0001";
        $query="INSERT INTO general(app_no,course,fname,mname,lname,dob,bloodgroup,address1,pincode,stat,email,number1,religion,caste,ffname,fmname,flname,mfname,mmname,mlname,gfname,gmname,glname,relation,occupation,gnum,board,schoolx,yearp,marksobx,marksfullx,marksavgx,board1,schoolxii,yearpxii,marksobxii,marksfullxii,marksavgxii,covid,filep,files) VALUES ( '$id','$course','$fname','$mname','$lname',' $dob','$bloodgroup','$address',$pincode,'$stat','$email',$number,'$religion','$caste','$ffname','$fmname','$flname','$mfname','$mmname','$mlname','$gfname','$gmname','$glname','$relation','$occupation',$gnum,'$board','$schoolx',$yearp,$marksobx,$marksfullx,$marksavgx,'$bb','$schoolxii',$yearpxii,$marksobxii,$marksfullxii,$marksavgxii,'$covid','$file','$file1')";
    $data= mysqli_query($conn,$query);
    if($data){
    //  header("location: ug_next.php");
    ?>
       <h4 style="color:red;background-color:white;">Your form is successfully submitted</h4><br><br>
       <?php
       echo " Your Application Number is :  ".$id;
    }
    else{
        echo "<script>alert('Something Went Wrong ...TRY AGAIN')</script>";
    }
}
}
?>
<div class="buttons">
    <a href="home.php">Home</a>
    <a href="login.php">Login</a>
</div>
</body>
</html>