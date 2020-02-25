<?php
  if(isset($_POST['button']) && !empty($_POST['name']) &&
   !empty($_POST['surname'])&& !empty($_POST['age']) && !empty($_POST['color'])){
     $name =$_POST['name'];
     $surname =$_POST['surname'];
     $birthday =$_POST['age'];
     $color = $_POST['color'];

     require_once('./connect.php');
     $sql = "INSERT INTO `user`(`id`, `name`, `surname`, `bday`, `color`) VALUES (NULL,'$name','$surname','$birthday', $color)";
     if(mysqli_query($conn,$sql)){
       echo 'ok';
       header('location: ../');
     }else{
       echo 'err';
     }
   }
 ?>
