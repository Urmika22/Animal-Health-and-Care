<?php
require_once('config.php') ?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
.m{
  width: 45px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}


.cancelbtn {
  padding: 14px 20px;
  background-color: cadetblue;
}



.container {
  padding: 16px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: tab1le;
}

  }
}
</style>
</head>
<body>
  <div>
    
    

<form action="vet.php" method="post"  enctype="multipart/form-data"   style="border:1px solid #ccc">
  <div class="container">
   <table style="width:100%;background:cadetblue;"><tr>
    <td><center><h1 style="text-decoration: underline;text-align: center;font-family:Algerian ";>Veterian Sign Up</h1></center></td>
    <td><img src="images/v.jpg" style="text-align: center; border-radius: 50px;" ></td>
</tr></table> 
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="Name"><b> Name:</b></label>
    <input type="text" placeholder="Name" id="Name" name="Name" required>
    <label for="address"><b>Qualification</b></label>
    <input type="text" placeholder="Qualification" name="Qua" required><br><br>

<div class="form-group">
<label for="File"><b>Profile Pic :</b></label><br>
<input type="file"  name="file" id="file" class="form-control" required>
<small> Passport Size photo</small><br><br>


<label for="Gender"><b>Gender</b></label><br><br>
 
    <input type="radio" name="gender" value="M" required> Male<br>
    <input type="radio" name="gender" value="F" required> Female<br><br>
      
   <label  ><b>Speciality:</b></label><br><br>
     <select name="Speciality">
      <option selected hidden value="">Select Speciality</option>
       <option value="All" selected>All</option>
       <option value="Dog"><b>Dog</b></option>
      <option value="Cat"><b>Cat</b></option>
        <option value="Cow"><b>Cow</b></option>
        <option value="Birds"><b>Birds</b></option>
       <option value="Horse"><b>Horse</b></option><br>
         </select><br><br>
       
       
       
     <label for="phone" ><b>Enter a phone number:</b></label><br><br>
    
  <input type="tel" id="phone" name="phone" placeholder="111-222-3333" pattern="[0-9]{3}-[0-9]{3}-[0-9]{}" required><br><br>
<small>Format: 111-222-3333</small><br><br>
 
    <label for="email"><b>Email:</b></label><br><br>
    <input type="email" placeholder="Enter Email" id="email" name="email" required><br><br>

    <label for="address"><b>Clinic Address:</b></label>
    <input type="text" placeholder="Address" name="address" required>
       
  

    <p>By creating an account you agree to our <a href="terms.html" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="submit" name="create" value="sign Up" style="background:cadetblue;width: 50%;"><b>Sign Up</b></button>
      <li class="ftco-animate"><a href="Display.php" data-toggle="tooltip" data-placement="bottom" >See your Profile </span></a></li>
              
    </div>
  </div>
</form>

</body>
</html>
