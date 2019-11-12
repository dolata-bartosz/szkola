<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="name" placeholder="imie">
      <input type="text" name="lastname" placeholder="nazwisko">
      <input type="submit" name="btn">
    </form>
  <?php
  if(isset($_POST['btn'])){
    $im = $_POST['name'];
    $nzw = $_POST['lastname'];
    $_SESSION['imie']=$im;
    setcookie('nazwisko', $nzw ,time()+(60‬*60*24*2));
  }

   ?>
  </body>
</html>


<!-- Użytkownik podaje imie i nazwisko w formularzu utworz zmienna sesyjna w ktorej
bedzie przechowywane imie oraz cookie dla nazwiska przez 2 dni.
Wyświetl dane pod formularzem pobierając je ze zmiennej sesynej i ciasteczka:
Imie:...
Nazwisko:... -->
