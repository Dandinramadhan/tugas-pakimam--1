<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="style1.css" />
  </head> 

  <body>
    <header>
      <img class="logolgn" src="img/smk11-removebg-preview.png" width="110px" height="110px" alt"" >
    </header>
    <div class="wrapper">
      <div class="form-box login">
        <h2 class="lgn">Login</h2>
        <form action="#">
          <div class="input-box">
            <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
            <input type="email" name="email" required />
            <label>Email</label>
          </div>
          <div class="input-box">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="password" name="password" required />
            <label>Password</label>
          </div>
          <div class="remember-forgot">
            <a href="#">Forgot Password?</a>
          </div>
          <button type="submmit" class="btn">Login</button>
          <div class="login-register">
            <p>
              Don't have account?
              <a href="register_view.php" class="register-link">Register</a>
            </p>
          </div>
  </body>
</html>
