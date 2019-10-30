<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function suma(){

      }
     ?>
    <form method="post">
      <input type="number" name="ilosc">
      <input type="submit" name="bnt">
      </form>
      <?php
        if(!empty($_POST['ilosc'])&&(isset($_POST['bnt'])||isset($_POST['bnt2']))){
          $ilosc = $_POST['ilosc'];
          echo $ilosc;
          if($ilosc>=1 && $ilosc <=70){
          ?>
            <form method="post">
              <?php
            for($i=1;$i<=$ilosc;$i++){
                echo "<br>","<input type=\"number\" name=\"ilosc$i\">";
            }

            ?>
            <input type="submit" name="bnt2">
          </form>
          <?php
            $_POST['ilosc']=2;
          for($i=1;$i<=$ilosc;$i++){
            $t[$i] = $_POST["ilosc$i"];
          }
          echo $t[2];
        }
        }
       ?>

  </body>
</html>
