<?php
if(isset($_POST['button']) && !empty($_POST['name']) &&
 !empty($_POST['surname'])&& !empty($_POST['age'])){
   $name =$_POST['name'];
   $surname =$_POST['surname'];
   $birthday =$_POST['age'];
   $id = $_POST['id'];
   require_once('./connect.php');
    $sql ="UPDATE `user` SET `name`='$name',`surname`='$surname',`bday`='$birthday' WHERE `id`=$id";
   if(mysqli_query($conn,$sql)){
     echo 'ok';
     header('location: ../');
   }else{
     echo 'err';
   }
 }

 ?>
