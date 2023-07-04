
<?php
include 'config.php';
 if(isset($_POST['create']))
 {
  $username = $_POST['Name'];
  $Qualification= $_POST['Qua'];
  $file= $_FILES['file'];
  $Gender= $_POST['gender'];
  $Spec=$_POST['Speciality'];
  
  $Phn=$_POST['phone'];
  $email=$_POST['email'];
  $Add=$_POST['address'];
  

 // print_r($file);
  $filename = $file['name'];
  $filepath= $file['tmp_name'];
  $fileerror= $file['error'];
  if($fileerror ==0)
  {
    $destfile ='upload/'.$filename;
    //echo"$destfile";

    move_uploaded_file($filepath, $destfile);

    $insertquery =" insert into veterian(Name,Qualification,Image,Gender,Speciality,Num,email,Address ) values('$username','$Qualification','$destfile','$Gender','$Spec','$Phn','$email','$Add')";

    $query = mysqli_query($con,$insertquery);
    if($query)
    {
      echo "inserted";
    }
    else{
      echo "Not Inserted";
    }
     header('location:veteriansign.php');
          
  }
 }
 else
 {
  echo "No Btn";
 }
   
   