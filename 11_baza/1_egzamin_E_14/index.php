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
     <form method="post">
       <select name="sel">
         <option value="c">Czekolada</option>
         <option value="g">Grześki</option>
         <option value="b">Baton</option>
         <option value="w">Wafel</option>
       </select>
       <input type="submit" name="button" value="Wybierz">
     </form>
     <?php
     if(isset($_POST["sel"])){
       $towar = $_POST["sel"];
       ############################################
      switch ($towar) {
        case 'c':
          $towar = "Czekolada";
          break;
        case 'g':
          $towar = "Grześki";
          break;
        case 'b':
          $towar = "Baton";
          break;
        case 'w':
          $towar = "Wafle";
          break;
      }
      echo $towar;
      $connect = mysqli_connect("localhost","root","","sklepik");
      mysqli_set_charset($connect,"utf8");
      $sql = "SELECT `cena` FROM `towary` WHERE `nazwa`='$towar'";
      $result=mysqli_query($connect,$sql);
      $row = mysqli_fetch_assoc($result);
      $promocja = round($row["cena"] * 0.85,2);
      echo " ".$promocja;
      mysqli_close($connect);
    }

      ?>
  </body>
</html>
