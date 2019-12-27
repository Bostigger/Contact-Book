<?php
require_once("process.php");
?>
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

 <!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="bootstrap.min.css">
 <title>Desi Developer</title>
 <style>
  *{
   margin: 0;
   padding: 0;
   box-sizing: border-box;
  }
  body{
   font-family: sans-serif;
  }
  a:link,
  a:visited{
   text-decoration: none;
  }
  .modal{
   background-color: rgba(0,0,0, .8);
   width:100%;
   height: 100vh;
   position: absolute;
   top: 0;
   left: 0;
   z-index: 10;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  }
  .modal__content{
   width: 75%;
   height: 65%;
   background-color: #fff;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   padding: 2em;
   border-radius: 1em;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  }
  #modal:target{
   opacity: 1;
   visibility: visible;
  }
  #modal:target .modal__content{
   opacity: 1;
   visibility: visible;
  }
  .modal__close{
   color: #363636;
   font-size: 2em;
   position: absolute;
   top: .5em;
   right: 1em;
  }
  .modal__heading{
   color: dodgerblue;
   margin-bottom: 1em;
  }
  .modal__paragraph{
   line-height: 1.5em;
  }
.modal-open{
 display: inline-block;
 color: dodgerblue;
 margin: 2em;
}
 </style>
</head>
<body>
 <a href="#modal" class="modal-open">View Contact details</a>

 <div class="modal" id="modal">
    <div class="modal__content">
      <a href="#" class="modal__close">&times;</a>
      <h2 class="modal__heading">Desi Developer</h2>
      <p class="modal__paragraph">

        <table class="table table-striped">
          <th>ID</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Location</th>
          <tr>
          <td> <?= $username =$row['id'];?></td>
          <td> <?= $username =$row['username'];?></td>
          <td> <?= $username =$row['phone'];?></td>
          <td> <?= $username =$row['location'];?></td>
          </tr>
        </table>

         <a href="home.php">Go Back</a>


      </p>
    </div>
 </div>
</body>
</html>
