<?php
session_start();
include 'connect.php';
$email  =$_POST['email'];
$pass = $_POST['pass'];

$sql ="select * from users where email='$email' AND password='$pass'";
$result =mysqli_query($conn,$sql);

if (!$row=mysqli_fetch_assoc($result)){
    header("Location:index.php");
}
else{
    $_SESSION['name']=$_POST['email'];
    header("Location:home.php");
}



?>
