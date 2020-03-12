<?php
if(isset($_GET['id'])){
  require("connect.php");
  $id=$_GET['id'];
  $sql="DELETE FROM `student` WHERE `id`=$id";
  mysqli_query($conn,$sql);
  header("location: ./index.php");
}
?>
