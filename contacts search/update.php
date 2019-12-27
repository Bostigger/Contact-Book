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

if (isset($_GET['edit'])) {
  $id     =  $_GET['edit'];
  $query  =  "select * from mycontacts where id='$id'";
  $exeque = mysqli_query($conn,$query);
  $row=mysqli_fetch_assoc($exeque);
  $id      =$row['id'];
  $username =$row['username'];
  $location  =$row['location'];
  $phone   =$row['phone'];



}



 ?>



   <div class="container text-center">
     <h1 class="py-4 bg-dark text-light rounded"> <i class="fas fa-swatchbook"></i> Peter's Contact Book </h1>
   <div class="d-flex justify-content-center">
     <form action="" method="post" class="w-50">
       <input type="hidden" name="id" value="<?=$id;  ?>">
       <div class="py-2">
         <div class="input-group mb-2">
           <div class="input-group-prepend">
             <div class="input-group-text bg-warning"><i class="fas fa-address-book" ></i></div>
           </div>
             <input type="text" class="form-control" id="inlineFormInputGroup"
             name="username" value="<?=$username?>" autocomplete="off" >
         </div>
       </div>

       <div class="pt-2">
         <div class="input-group mb-2">
           <div class="input-group-prepend">
             <div class="input-group-text bg-warning"><i class="fas fa-phone" aria-hidden="true"></i></div>
           </div>
             <input type="text" class="form-control" id="inlineFormInputGroup"
             name="phone"  value="<?=$phone?>" autocomplete="off">
         </div>
       </div>

       <div class="row">
         <div class="col">

           <div class="py-2">
             <div class="input-group mb-2">
               <div class="input-group-prepend">
                 <div class="input-group-text bg-warning">Location</div>
               </div>
                 <input type="text" class="form-control" id="inlineFormInputGroup"
                 name="location" value="<?=$location?>"  autocomplete="off">
             </div>
           </div>

         </div>

         <div class="col">
           <div class="py-2">
             <div class="input-group mb-2">
               <div class="input-group-prepend">
                 <div class="input-group-text bg-warning">ID</div>
               </div>
                 <input type="date" class="form-control" id="inlineFormInputGroup"
                 name="date" value="<?=$date?>" >
             </div>
           </div>

         </div>

       </div>

       <div class="d-flex justify-content-center">


       
       <button type="submit" name="update" id="btnid4" class="btn btn-outline mr-3">update</button>


       </div>
     </form>
   </div>

   <!-- <div class="d-flex table-data">
     <table class="table table-striped table-dark">
       <thead class="thead-dark">
         <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Location</th>
           <th>Phone</th>
           <th>Edit</th>
         </tr>
       </thead>


         <?php

           $sql = "select * from mycontacts";
           $runquery = mysqli_query($conn,$sql);
           $checkrows = mysqli_num_rows($runquery);
           if ($checkrows>0) {
             while ($row=mysqli_fetch_assoc($runquery)) {?>

               <tr>
                 <td> <?php echo $row["id"]; ?> </td>
                 <td> <?php echo $row["username"]; ?> </td>
                 <td> <?php echo $row["location"]; ?> </td>
                 <td> <?php echo $row["phone"]; ?> </td>
                 <td> <a href="update.php?edit=<?= $row['id']; ?>"
                   class="badge badge-warning p-2">Edit Record</a> |
                   <a href="process.php?delete=<?= $row['id']; ?>"
                     class="badge badge-danger p-2" onclick="return confirm('Are you sure you want to delete this member')">Delete Record</a>

                 </td>

               </tr>
           <?php
             }




         }





            ?>



       </tbody>
     </table>

   </div> -->


 </div>




 </main>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="jquery-3.4.1.min.js"></script>
<script src="main.js">

</script>
</body>
</html>
