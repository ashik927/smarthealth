<?php
    include "connect_db.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head><meta charset="gb18030">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doctor Signin</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="">
    
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f1595d">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/elephant.min.css">
    <link rel="stylesheet" href="css/login-2.min.css">
  </head>
  <body>
    <div class="login">
      <div class="login-body">
        <a class="login-brand" href="#">
         <center><h3>Sign In</h3> </center> 
        </a>
        <div class="login-form">
          <form data-toggle="validator" action="#" method="post">
            <div class="form-group">
              <label for="email">User Name</label>
              <input id="email" class="form-control" type="text" name="txtEmail" spellcheck="false" autocomplete="off" data-msg-required="Please enter your email address." required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input id="password" class="form-control" type="password" name="txtPassword" minlength="4" data-msg-minlength="Password must be 4 characters or more." data-msg-required="Please enter your password." required>
            </div>
            <div class="form-group">
              <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="checkbox" checked="checked">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">Keep me signed in</span>
              </label>
              
              
            </div>
            <button class="btn btn-primary btn-block" name="btnsignin" type="submit">Sign in</button>
            
            
          </form>
        </div>
      </div>
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    
  </body>
</html>