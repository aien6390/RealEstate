<?php
include_once("connection.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $password=$_POST['password'];

    $query="INSERT INTO project (username,email,phonenumber,password) VALUES ('$username', '$email','$phonenumber','$password')";

    $result=mysqli_query($conn,$query);
    

if($result)
{
   echo "<script>alert ('data inserted !');location.href='login.php';</script>";

}
else{
    echo "<script>alert ('data not inserted !');location.href='registration.php';</script>";
}
}

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<style>
    body {
  font-family: Arial, Helvetica, sans-serif;
  background: linear-gradient(to left, #ff9a9e, #fecfef);
  margin: 0;
  padding: 0;
}

.container {
  background-color: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  margin: 100px auto;
  max-width: 400px;
}

.container h1 {
  text-align: center;
}

.container p {
  text-align: center;
}

.container label {
  font-weight: bold;
}

.container input[type="text"],
.container input[type="password"] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.container button[type="submit"] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

.container button[type="submit"]:hover {
  background-color: #45a049;
}

.container.signin {
  text-align: center;
}

.container.signin p {
  margin: 0;
}

@media screen and (max-width: 600px) {
  .container {
    width: 80%;
  }
}

</style>
<form action="" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Enter your details to create account in Real Estate</p>
    <hr>

    <label for="uname"><b>User Name</b></label>
    <input type="text" placeholder="Enter Name" name="username" id="username" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="phone"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Number" name="phonenumber" id="phone" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

    
    <button type="submit" class="registerbtn">Register</button>
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  
  </div>
   
  
</form>

</body>
</html>
