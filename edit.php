<?php
error_reporting (E_ALL ^ E_NOTICE); 
    include("connection.php");
    $app=$_GET['id'];
    $data="SELECT * FROM ugregistration where app_no LIKE '%$app%'";
    $res=mysqli_query($conn,$data);
   
    while($row=mysqli_fetch_array($res)){
      $course = $row['course'];
      $fname = $row['fname'];
      $mname = $row['mname'];
      $lname = $row['lname'];
      $dob = $row['dob'];
      $bloodgroup = $row['bloodgroup'];
      $address1 = $row['address1'];
      $pincode = $row['pincode'];
      $stat = $row['stat'];
      $email = $row['email'];
      $number1 = $row['number1'];
      $religion = $row['religion'];
      $caste = $row['caste'];
      $ffname = $row['ffname'];
      $fmname = $row['fmname'];
      $flname = $row['flname'];
      $mfname = $row['mfname'];
      $mmname = $row['mmname'];
      $mlname = $row['mlname'];
      $gfname = $row['gfname'];
      $gmname = $row['gmname'];
      $glname = $row['glname'];
      $relation =$row['relation'];
      $occupation =$row['occupation'];
      $gnum = $row['gnum'];
      $board = $row['board'];
      $schoolx = $row['schoolx'];
      $yearp = $row['yearp'];
      $marksobx = $row['marksobx'];
      $marksfullx = $row['marksfullx'];
      $marksavgx = $row['marksavgx'];
      $board1 = $row['board1'];
      $schoolxii = $row['schoolxii'];
      $yearpxii = $row['yearpxii'];
      $marksobxii = $row['marksobxii'];
      $marksfullxii = $row['marksfullxii'];
      $marksavgxii = $row['marksavgxii']; 
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="GET">
            <label for="course"><b>Course :</b></label>
            <input type="text" name="course" value="<?php echo $course; ?>" ><br><br>
                
            <div class="name">
               <label><b> Name : </b> </label>
               <input type="text" name="fname" value="<?php echo $fname; ?>" >
               <input type="text" name="mname" value="<?php echo $mname; ?>">
               <input type="text" name="lname" value="<?php echo $lname; ?>"><br><br>
           </div>
            <label for="dob"><b>Date of birth :</b></label>
            <input type="date" name="dob" value="<?php echo $dob; ?>">
            <label for="bloodgroup"><b>Blood Group :</b></label>
            <input type="text" name="bloodgroup" value="<?php echo $bloodgroup; ?>">
            <label for="address"><b>Address :</b></label>
            <input type="text" name="address1" value="<?php echo $address1; ?>">
            <label for="pincode"><b>Pincode :</b></label>
            <input type="num" name="pincode" value="<?php echo $pincode; ?>">
            <label for="stat"><b>State :</b></label>
            <input type="text" name="stat" value="<?php echo $stat; ?>"><br><br>
            <label for="email"><b>Email :</b></label>
            <input type="email"name="email"value="<?php echo $email; ?>">
            <label for="number"><b>Mobile Number :</b></label>
            <input type="num"name="number1"value="<?php echo $number1; ?>"><br><br>
            <label for="religion"><b>Religion :</b></label>
            <input type="text"name="religion"value="<?php echo $religion; ?>">
          

            <label for="Caste"><b> Caste :</b></label>
            <input type="text" name="caste" value="<?php echo $caste; ?>"><br><br>
            <label for="fathername"><b>Father's Name :</b></label>
            <input type="text"name="ffname"value="<?php echo $ffname; ?>">
            <input type="text"name="fmname"value="<?php echo $fmname; ?>">
            <input type="text"name="flname"value="<?php echo $flname; ?>"><br><br>

            <label for="mfname"><b>Mother's Name :</b></label>
            <input type="text"name="mfname"value="<?php echo $mfname; ?>">
            <input type="text"name="mmname"value="<?php echo $mmname; ?>">
            <input type="text"name="mlname"value="<?php echo $mlname; ?>"><br><br> 

            <label for="gfname"><b>Guardian's Name :</b></label>
            <input type="text"name="gfname"value="<?php echo $gfname; ?>">
            <input type="text"name="gmname"value="<?php echo $gmname; ?>">
            <input type="text"name="glname"value="<?php echo $glname; ?>"><br><br>

            <label for="relation"><b>Guardian relation :</b></label>
            <input type="text" name="relation"value="<?php echo $relation; ?>"><br><br>
                
            <label for="occupation"><b>Guardian's Occupation :</b></label>
            <input type="text"name="occupation"value="<?php echo $occupation; ?>">
            <label for="gnum"><b>Guardian's Contact Number :</b></label>
            <input type="num"name="gnum"value="<?php echo $gnum; ?>"><br>
            <h8>Academic details-<br></h8>
            <label for="classx"><b>Class X :</b></label><BR>
                <label for="board"><b>Board/Council :</b></label>
                <input type="text" name="board" value="<?php echo $board; ?>">
                <label for="Schoolx"><b>School Name :</b></label>
                <input type="text"name="schoolx"value="<?php echo $schoolx; ?>">
                <label for="yearp"><b>Passing Year :</b></label>
                <input type="text" name="yearp"value="<?php echo $yearp; ?>"><br><br>
                <label for="marksobx"><b>Marks Obtained :</b></label>
                <input type="num"name="marksobx"value="<?php echo $marksobx; ?>">
                <label for="marksfullx"><b> Marks :</b></label>
                <input type="num"name="marksfullx"value="<?php echo $marksfullx; ?>">
                <label for="marksavgx"><b>% Average :</b></label>
                <input type="num"name="marksavgx"value="<?php echo $marksavgx; ?>"><br>

                <label for="classxii"><b>Class XII :</b></label><BR>
                    <label for="board1"><b>Board/Council :</b></label>
                    <input type="text" name="board1" value="<?php echo $board1; ?>">
                    <label for="Schoolxii"><b>School Name :</b></label>
                    <input type="text"name="schoolxii"value="<?php echo $schoolxii; ?>">
                    <label for="yearpxii"><b>Passing Year :</b></label>
                    <input type="text" name="yearpxii"value="<?php echo $yearpxii; ?>">
                        
                    <label for="marksobxii"><b>Marks Obtained :</b></label>
                    <input type="num"name="marksobxii"value="<?php echo $marksobxii; ?>">
                    <label for="marksfullxii"><b>Full Marks :</b></label>
                    <input type="num"name="marksfullxii"value="<?php echo $marksfullxii; ?>">
                    <label for="marksavgxii"><b>% Average :</b></label>
                    <input type="num"name="marksavgxii"value="<?php echo $marksavgxii; ?>"><br><br>
                   <input type="hidden"name="app_no"value="<?php echo $_GET['id']; ?>"><br><br>
                   <button type="submit" name="update" >UPDATE</button>
                   <?php
                   if(isset($_GET['update']))
                   {
                    $app = $_GET['app_no'];
                    $course = $_GET['course'];
                    $fname = $_GET['fname'];
                    $mname = $_GET['mname'];
                    $lname = $_GET['lname'];
                    $dob = $_GET['dob'];
                    $bloodgroup = $_GET['bloodgroup'];
                    $address = $_GET['address1'];
                    $pincode = $_GET['pincode'];
                    $stat = $_GET['stat'];
                    $email = $_GET['email'];
                    $number = $_GET['number1'];
                    $religion = $_GET['religion'];
                    $caste = $_GET['caste'];
                    $ffname = $_GET['ffname'];
                    $fmname = $_GET['fmname'];
                    $flname = $_GET['flname'];
                    $mfname = $_GET['mfname'];
                    $mmname = $_GET['mmname'];
                    $mlname = $_GET['mlname'];
                    $gfname = $_GET['gfname'];
                    $gmname = $_GET['gmname'];
                    $glname = $_GET['glname'];
                    $relation = $_GET['relation'];
                    $occupation = $_GET['occupation'];
                    $gnum = $_GET['gnum'];
                    $board = $_GET['board'];
                    $schoolx = $_GET['schoolx'];
                    $yearp = $_GET['yearp'];
                    $marksobx = $_GET['marksobx'];
                    $marksfullx = $_GET['marksfullx'];
                    $marksavgx = $_GET['marksavgx'];
                    $board1 = $_GET['board1'];
                    $schoolxii = $_GET['schoolxii'];
                    $yearpxii = $_GET['yearpxii'];
                    $marksobxii = $_GET['marksobxii'];
                    $marksfullxii = $_GET['marksfullxii'];
                    $marksavgxii = $_GET['marksavgxii'];
                    $query="UPDATE ugregistration SET course='$course', fname='$fname',mname='$mname',lname='$lname',dob='$dob',bloodgroup='$bloodgroup',address1='$address1',pincode=$pincode,stat='$stat',email='$email',number1=$number1,religion='$religion',caste='$caste',ffname='$ffname',fmname='$fmname',flname='$flname',mfname='$mfname',mmname='$mmname',mlname='$mlname',gfname='$gfname',gmname='$gmname',glname='$glname',relation='$relation',occupation='$occupation',gnum=$gnum,board='$board',schoolx='$schoolx',yearp=$yearp,marksobx=$marksobx,marksfullx=$marksfullx,marksavgx=$marksavgx,board1='$board1',schoolxii='$schoolxii',yearpxii=$yearpxii,marksobxii=$marksobxii,marksfullxii=$marksfullxii,marksavgxii=$marksavgxii WHERE app_no ='$app'";
                    $data= mysqli_query($conn,$query);
                    if($data){
                    //  header("location: ug_next.php");
                       echo "<script>alert('Data Updated')</script>";
                    }
                    else{
                        echo "<script>alert('Something Went Wrong ...TRY AGAIN')</script>";
                          }
                    }
                    ?>
</body>
</html>