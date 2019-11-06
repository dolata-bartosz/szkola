<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
        if(!empty($_POST['ilosc'])&&(isset($_POST['bnt'])||isset($_POST['bnt2']))){
          $ilosc = $_POST['ilosc'];
          echo $ilosc;
          if($ilosc>=1 && $ilosc <=70){
          ?>
            <form method="post">
              <input style="display: none;" type="text" name="ilosc" value="<?php $ilosc ?>" >
              <?php
            for($i=1;$i<=$ilosc;$i++){
                echo "<br>","<input type=\"number\" name=\"ilosc$i\">";
                }

            ?>
            <input type="submit" name="bnt2">
          </form>
          <?php
              for($i=1;$i<=$ilosc;$i++){
                  if(!empty($_POST["ilosc$i"])){
                      echo $_POST["ilosc$i"];
                  }
                }
            }
          } else {
        ?>
        <form method="post">
          <input type="number" name="ilosc">
          <input type="submit" name="bnt">
          </form>

        <?php
          }
       ?>

  </body>
</html>
