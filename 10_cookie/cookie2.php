<?php
if(!isset($_COOKIE['surname'])){
  setcookie("surname","Jełop");
  header("location: ./cookie2.php");
}  else {
    echo $_COOKIE["surname"];
  }
  ?>
