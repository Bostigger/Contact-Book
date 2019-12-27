<?php
require_once("process.php");
?>

<!Doctype html>

<html>
  <head>
    <title>Create an account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <script src="jquery-3.4.1.min.js"></script>
    <script src="bootstrap.bundle.min.js">  </script>
    <link rel="stylesheet" href="signup.css">

    <head>

  <body>
    <div class="signup-form">
      <form class="" action="signup_user.php" method="post">
        <div class="form-header">
          <h2>Sign Up to use Contact App</h2>
        </div>

        <div class="form-group">
          <label>UserName</label>
          <input type="text" name="userName" placeholder="Username  " class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" placeholder="Email" class="form-control">
        </div>


        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter Password  " class="form-control">
        </div>

        <div class="form-group">
          <label  class="checkbox-inline"> <input type="checkbox" required>I accept the terms and conditions <a href="#">Terms of use</a> </label>
        </div>


        <div class="form-group">
        <button type="submit" name="btnsignup" class="btn btn-primary btn-block btn-lg">Continue</button>
        </div>

        






      </form>


    </div>

  </body>



</html>
