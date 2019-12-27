<?php
require_once("process.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
 <meta charset="utf-8">
 <title>My Contacts</title>
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="style.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="all.js"> </script>
</head>
<body>
 <main>


<?php

if (isset($_GET['view'])) {
  $id     =  $_GET['view'];
  $query  =  "select * from mycontacts where id='$id'";
  $exeque = mysqli_query($conn,$query);
  $row=mysqli_fetch_assoc($exeque);
  $id      =$row['id'];
  $username =$row['username'];
  $location  =$row['location'];
  $phone   =$row['phone'];



}



 ?>

<div class="container">
  <h1 class="text-center justify-content-center py-5"> Record details</h1>


    <div class="col-md-12 mt-3 bg-light p-4 rounded">

      <div class="text-center">
        <table class="table table-striped">
          <th>ID</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Location</th>
          <th></th>
          <tr>
          <td> <?= $username =$row['id'];?></td>
          <td> <?= $username =$row['username'];?></td>
          <td> <?= $username =$row['phone'];?></td>
          <td> <?= $username =$row['location'];?></td>
          <td> <a href="update.php?edit=<?= $row['id']; ?>"
            class="badge badge-warning p-2">Edit Record</a> |
            <a href="process.php?delete=<?= $row['id']; ?>"
              class="badge badge-danger p-2" onclick="return confirm('Are you sure you want to delete this member')">Delete Record</a>



          </td>
          </tr>
        </table>

    </div>

  </div>






   <a href="home.php" style="color:grey;">Go Back</a>
</div>
