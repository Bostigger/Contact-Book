<?php

include 'connect.php';

  if (isset($_POST['btnsignup'])) {
    $name     = htmlentities(mysqli_real_escape_string($conn, $_POST['userName']));
    $email    = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
    $pass  = htmlentities(mysqli_real_escape_string($conn, $_POST['password']));


   $sql = "insert into users (username,email,cpassword) values
   ('$name','$email','$pass')";


   $executeSql = mysqli_query($conn,$sql);

   if ($executeSql) {
     echo "<script> alert('Congratulations $name, your account is created succesfully') </script>";
     echo "<script>window.open('home.php','_self')</script>";
   }
   else {
     echo "<string> alert('Something went wrong, Please try again') </script>";
     echo "<script>window.open('signup.php','_self')</script>";
   }

  }



 ?>
