<?php
session_start();
require 'db.php';
 if(isset($_POST["signin"])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $result = mysqli_query($conn,"SELECT * FROM form form WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
        if($password == $row["password"]){
            $_SESSION["signin"]=true;
            $_SESSION["id"]= $row["id"];
            header("Location: Dashboard.html");
    }
    else{
        echo '<script>alert("Wrong Password")</script>';
      }
    }
    else{
        echo '<script>alert("User not registerd")</script>';
      }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <h2 class="head">SignIn</h2>
      <form action="" method="post">
          <label for="email"> Email</label> 
          <input type="email" name="email" required><br>
          <label for="password">Password</label>
          <input type="password" name="password" required><br>
      
      <button type="signin" name="signin" class="btnsignin btn-primary">SignIn</button>
      <p>Not have an account ? <a href="signup.php">SignUp Here</a></p>
        </form>

        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>