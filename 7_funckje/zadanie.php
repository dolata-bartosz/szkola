<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
        if(isset($_POST['bnt2'])){
            $ilosc = $_POST['nilosc'];
            for($i=0;$i<$ilosc;$i++){
              echo $_POST["ilosc$i"],"<br>";
            }
        } else if(!empty($_POST['ilosc']) && isset($_POST['bnt'])){
          $ilosc = $_POST['ilosc'];
            if($ilosc>=1 && $ilosc <=70){
            ?>
              <form method="post">
                <input type="hidden" name="nilosc" value="<?php echo $ilosc ?>"
                <?php
              for($i=0;$i<$ilosc;$i++){
                  echo "<br>","<input type=\"number\" name=\"ilosc$i\">";
                  }

              ?>
              <input type="submit" name="bnt2">
            </form>
        <?php
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
