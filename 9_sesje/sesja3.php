<?php
  session_start();
  unset($_SESSION['name']);
  session_destroy();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sesja 3</title>
  </head>
  <body>
    Strona 3<hr>
    Witamy <?php echo $_SESSION['name']; ?> na stronie! <br>
    <?php
     echo "Identyfikator sesji: ", session_id();
     ?>
     <br>
     <a href="./sesja1.php">Strona startowa</a>
  </body>
</html>
