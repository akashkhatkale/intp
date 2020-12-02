<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="loginn.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;500&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">  

  </head>
  <body>
    
  
    <div class="nav">
        <div class="logo">
          <img src="logo.png" alt="" style="width: 30px;">
          <h2>STRAY CARE</h2>
        </div>
      </div>

      <!-- title -->
  <div class="login-title">Sign in </div>
  <div class="login-subtitle">if you already have an account</div>
  
  <?php
  if(@$_GET["mssg"] == true){
  ?>
  <div class="login-error" style="color:#ff0404;"><?php echo $_GET["mssg"]?></div>
  <?php
  }
  ?>
    
  <!-- subtitle -->
  <form method="post" name="loginForm" onsubmit="true"  style="margin-top: 30px; display: flex;align-items: center; flex-direction: column;" action="login_other.php">
      
      <div class="login-input-container" >
          <p class="login-tag">Email address*</p>
          <input  id="login-email" name="Email" oninput="onEmailChange(this.value)"  class="login-input" type="email" placeholder="Your email" >
          <p id="login-email-error">*This field is required</p>
      </div>
      <div class="login-input-container" data-error="Enter a valid password" >
        <p class="login-tag">Password*</p>
        <input  minlength="6" id="login-pass" name="Password" oninput="onPassChange(this.value)" class="login-input" type="password" placeholder="Your password" required>
        <p id="login-pass-error">*This field is required</p>
     
      </div>
      
      <div style="display:flex; align-items:center;">
          <h4 style="color:white;">Are you a doctor?</h4>
          <input type="checkbox" name="Doctor">
      </div>
      
      <input class="login-submit" id="loginButton" type="Submit" name="Submit" value="Sign in">
  </form>
  
  
  <div class="login-button2">Don't have an account ? Sign up<a href="signup.php" style="color: #f70067; cursor: pointer;">&nbsphere</a></div>

  </body>

  
  <script src="login.js"></script>

</html>
