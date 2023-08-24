<?php
session_start();
require 'db.php';
// if($_SERVER['REQUEST_METHOD']=="POST"){
  if(isset($_POST["submit"])){
  $fristname=$_POST['fristname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $conpassword=$_POST['conpassword'];
  $img=$_POST['img'];
$duplicate = mysqli_query($conn,"SELECT * FROM form  WHERE email = '$email'");
if(mysqli_num_rows($duplicate)>0){
  echo '<script>alert("Email Has Already Taken")</script>';
}
else{
  if($password == $conpassword){
    $query = "INSERT INTO form (id,frist_name, last_name,email,password,img)  
    VALUES('','$fristname', '$lastname','$email','$password','$img')";
    mysqli_query($conn,$query);
    header("Location: login.php");
    echo '<script>alert("Registration Successfully")</script>';
  }
  else{
    echo '<script>alert("Password Does Not Match")</script>';
  }
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container">
    <h2 class="head">SignUp</h2>
    <form action="" method="post">
        <label for="fristname">Frist Name</label>
        <input type="text" name="fristname" required><br>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" required> <br>
        <label for="email"> Email</label> 
        <input type="email" name="email" required><br>
        <label for="password">Password</label>
        <input type="password" name="password" required><br>
        <label for="conpassword">Confirm Password</label>
        <input type="password" name="conpassword" required>
        <label for="img">Image</label>
        <input type="file" name="img" required> 
    <button type="submit" name="submit" class="btnsingup btn-primary">SignUp</button> <br><br>
    <a href="" >Terms & Condition</a> and <a href="">Policy & Privacy</a>
    <p>Already have an account ? <a href="login.php">SignIn</a></p>
      </form>
    
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>