<?php
require_once('config.php') ?>
<!DOCTYPE html>
<html>
<head>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=emailaddress]
input[type=password]
{
  width: 100%;
  padding: 6px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 5px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #000000;
  color: #FFFFFF;
  padding: 7px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

button:hover {
  opacity: 0.9;
}

.clearbtn {
  width: 4%;
  padding: 0.5px 0.2px;
  background-color: #000000;
  text-decoration: none;
}

.imgcontainer {
  text-align: center;
  margin: 14px 0 6px 0;
}
img.avatar {
  width: 20%;
  border-radius: 12%;
}

.container {
  padding: 0.2px;
}
span.psw {
  float:bottom;
  padding-top: 10px;
}
 span.psw {
     display: block;
     float: none;
  }
  .clearbtn {
     width: 10%;
  }

}
a{
  text-decoration: none;
}
</style>
<body>
  <div>
    <?php
    $con=  mysqli_connect('localhost','root','','animal health & care');
    mysqli_select_db($con,'animal health & care');
    if(isset($_POST["submit"]))
    {
       
      echo $s = "select * from customer where email = '".$_POST['Email']."' and psw ='".$_POST['pssw']."'";
      
      $result= mysqli_query($con,$s);
      if ($result) 
      {
        $num= mysqli_num_rows($result);
          if ($num==1)
          {
            header('location:index.html');
          }
          else{
            header('location:home.php');
          }
      }
      
      
    }
    ?>
  </div>

<h1><center>Animal Health and Care</center></h1>

  
  <div class="imgcontainer">
    <img src="images/image.png" alt="B:\Project\Animal & Health Care" class="image">
  </div>
  <div class="container">
    <form   method="post">
      <center><pre>
      <label for="email"><b>Email Id </b></label>

      <input type="email" placeholder="Enter Email" name="Email" required>

      <label for="psw"><b>Password</b></label>

      <input type="Password" placeholder="Enter Password" name="pssw" required>

      <button type="submit" name="submit" onclick="lsRememberMe()">Login</button>
      <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label>
    </pre></center>
  </form>
</div>
<center>
   <div class="container" style="background-color:#FFFFFF">
   <button type="button" class="clearbtn"><P><a href="signup.php" style="Text-decoration:None;color:white">Sign up</a></button>
    
   </P>
    <span class="eml"><P>Forgot <a href="#">Email Id</a></P></span>
    <span class="psw"><P>Forgot <a href="#">Password</a></P></span>
  </div>
</center>


 </body>
</html>
