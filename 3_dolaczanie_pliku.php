<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Początek pliku
    <?php
    //  include('./dolaczeniepliku/index.php');
  //  require('./dolaczaniepliku/index.php'); wyświetla kilka razy
    require_once('./dolaczaniepliku/index.php');
    require_once('./dolaczaniepliku/index.php');//wyświetla tylko raz
     ?>
    Koniec pliku
  </body>
</html>
