<?php
require_once("process.php");
?>


<!Doctype html>

<html>
  <head>
    <title>Login in account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <script src="jquery-3.4.1.min.js"></script>
    <script src="bootstrap.bundle.min.js">  </script>
    <link rel="stylesheet" href="signin.css">

    <head>

  <body>
    <div class="signin-form">
      <form class="" action="logi_user.php" method="post">
        <div class="form-header">
          <h2>Login in to account</h2>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="pass" placeholder="Enter Password  " class="form-control">
        </div>
        <div class="small">
          Forgot password? <a href="forgot_pass.php">Click here</a>
        </div>
        <div class="form-group">
        <button type="submit" name="btnsignin" class="btn btn-primary btn-block btn-lg">Sign in</button>
        </div>



        <div class="small text-center" style="color:red;">
          Don't have an account create one <a href="index.php">Create one</a>

        </div>



      </form>

    </div>

  </body>



</html>
