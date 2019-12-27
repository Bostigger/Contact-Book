<?php
require_once("connect.php");
include 'connect.php';

 if(isset($_POST['create'])){
 if(!empty($_POST['username']) &&!empty($_POST['location']) && !empty($_POST['phone']) && !empty($_POST['date'])) {
  $fname = $_POST['username'];
  $flocation = $_POST['location'];
  $fphone = $_POST['phone'];
  $fdate  = $_POST['date'];

  $sql = "insert into mycontacts(username,location,phone,date) values('$fname','$flocation','$fphone','$fdate')";
  $exequery = mysqli_query($conn,$sql);
}else {
  echo "<script> alert('Please fill out the form') </script>";
  echo "<script>window.open('index.php','_self')</script>";
  exit();
}
}

if (isset($_POST['update'])) {
 $userid = $_GET['edit'];
 $fname = $_POST['username'];
 $flocation = $_POST['location'];
 $fphone = $_POST['phone'];
 $fdate  = $_POST['date'];

 $update = "update mycontacts set username='".$fname."',location='".$flocation."',phone='".$fphone."', date='".$fdate."' where id='$userid'";
 $exeup = mysqli_query($conn,$update);

 if ($exeup) {
   header("location:home.php");
 }

}
if (isset($_GET['delete'])) {
  $id =$_GET['delete'];

  $sql  = "delete from mycontacts where id=$id";
  $exeq = mysqli_query($conn,$sql);
  if ($exeq) {
    header("location:home.php");
  }
}


?>
