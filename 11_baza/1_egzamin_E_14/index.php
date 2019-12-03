<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sklep papierniczy</title>
  </head>
  <body>
    <?php
    $sql = "SELECT `nazwa` FROM `towary` WHERE `promocja`=1";
    $connect = mysqli_connect("localhost","root","","sklepik");
    mysqli_set_charset($connect,"utf8");
    $result = mysqli_query($connect,$sql);
    echo "<ul>";
    while($row = mysqli_fetch_assoc($result)){
      echo "<li>",$row["nazwa"],"</li>";
    }
    echo "</ul>";
    mysqli_close($connect);
     ?>
  </body>
</html>
