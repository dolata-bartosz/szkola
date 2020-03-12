<?php
if(isset($_POST["btn"])
  &&!empty($_POST["name"])
  &&!empty($_POST["surname"])
  &&!empty($_POST["date"])
  &&!empty( $_POST["city"])
){
  require_once("connect.php");
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $date = $_POST["date"];
  $city = $_POST["city"];
  $sql = "INSERT INTO `student`( `name`, `surname`, `birthday`, `city_id`) VALUES ('$name','$surname','$date','$city')";
  mysqli_query($conn,$sql);
  header("location: ./index.php");
}else{
  echo "error";
}
 ?>
