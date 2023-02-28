<!-- Html and php for the sign up page -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ekerenyo Sunshine Academy</title>
  <link rel="stylesheet" href="index.css">
   <!-- Font Awesome Cdn Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <h1>WELCOME</h1>
    <p>EKERENYO SUNSHINE <br> ACADEMY</p>
   <h3 class="alignn"> Login </h3>
    <form action="login.php" method="post" >
      <input type="text" autocomplete="off" name="username" placeholder="Enter Username">
      <input type="text" autocomplete="off" name="password" placeholder="Enter Password">
      <p class="recover">
        <a href="#">Recover Password</a>
      </p>
    
    <button type="submit" name="login" >Login</button>
    </form> 
    <p class="or">
      ----- or continue with -----
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-github"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="not-member">
      Don't have an account <a href="index.php">Register</a>
    </div>
  </div>
</body>
</html>
