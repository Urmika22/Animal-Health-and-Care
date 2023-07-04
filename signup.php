<?php
require_once('config.php') ?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
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
  background-color: #f44336;
}


.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

.container {
  padding: 16px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: tab1le;
}

@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
  <div>
    <?php
    if(isset($_POST['create']))
    {
    $sql="INSERT INTO customer (firstName,lastName,email,psw)VALUES('".$_POST['firstName']."','".$_POST['lastName']."','".$_POST['email']."','".$_POST['psw']."')";
    if($con->query($sql)=== TRUE)
    {
      echo ' Successfully';

    }
    else {
      echo'error';
    }
    }
    ?>
  </div>

<form action="signup.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="firstname"><b>First name</b></label>
    <input type="text" placeholder="First Name" id="firstName" name="firstName" required><br>
    <label for="lastname"><b>Last name</b></label><br>
    <input type="text" placeholder="Last Name" name="lastName" id="lastName"required> <br><br>
    <label for="email"><b>Email</b></label><br><br>
    <input type="email" placeholder="Enter Email" id="email" name="email" required><br><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>


    <p>By creating an account you agree to our <a href="terms.html" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="submit" name="create" value="sign Up">Sign Up</button>
    </div>
  </div>
</form>
Already have the account <a href ="login.php">Click here</a> to go on login page

</body>
</html>
