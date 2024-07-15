<?php  
  session_start();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Admin Login Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

</head>
<body>

  <div class="wrapper">
  <div class="container">
    <div class="col-left">
      <div class="login-text">
        <h2>Welcome Back</h2>
        <p>Create your account.<br>It's totally free.</p>
        <i class="fa-solid fa-users-gear btn"></i>
      </div>
    </div>
    <div class="col-right">
      <div class="login-form">
        <?php if (isset($_SESSION["not_found"])) {
        ?>
        <h2 style="color:red">Login <?php echo $_SESSION["not_found"]; ?></h2>
        
        <?php }else{ ?>

        <h2>Login</h2>

        <?php } ?>
        <form action="../../action/admin_login_fetch.php" method="post">
          <p>
            <label>Email address<span>*</span></label>
            <input type="text" placeholder="Username or Email" required name="EMAIL">
          </p>
          <p>
            <label>Password<span>*</span></label>
            <input type="password" placeholder="Password" required name="PASSWORD">
          </p>
          <p>
            <input type="submit" value="Sing In" name="login">
          </p>
          <p>
            <a href="">Forget Password?</a>
          </p>
        </form>
      </div>
    </div>
  </div>
  <div class="credit">
    Designed by <a href="#">Tanvir</a>
  </div>
</div>
  
</body>
</html>
