<?php
  if(isset($_POST['button']) && !empty($_POST['name']) &&
   !empty($_POST['surname'])&& !empty($_POST['age'])){
     $name =$_POST['name'];
     $surname =$_POST['surname'];
     $birthday =$_POST['age'];

     require_once('./connect.php');
     $sql = "INSERT INTO `user`(`id`, `name`, `surname`, `bday`) VALUES (NULL,'$name','$surname','$birthday')";
     if(mysqli_query($conn,$sql)){
       echo 'ok';
       header('location: ../');
     }else{
       echo 'err';
     }
   }
 ?>
