<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      table,td,th{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
        text-align: center;
      }
    </style>
  </head>
  <body>
      <?php
      function srednia($tab,$ilosc){
        $suma=0;
        for($i=0;$i<$ilosc;$i++){
          if(empty($tab[$i]))
            $tab[$i]=0;
          $suma += $tab[$i];
        }
        return $suma/$ilosc;
      }
      function najstarszy($tab,$ilosc){
        $stary=$tab[0];
        for($i=0;$i<$ilosc;$i++){
          if ($tab[$i]>$stary) {
            $stary=$tab[$i];
          }
        }
        return $stary;
      }
      function najmlodszy($tab,$ilosc){
        $mlody=999;
        for($i=0;$i<$ilosc;$i++){
            if(!empty($tab[$i])){
              if ($tab[$i] < $mlody) {
                $mlody=$tab[$i];
              }
            }
          }
        return $mlody;
      }

        if(isset($_POST['bnt2'])){
            $ilosc = $_POST['nilosc'];
            for($i=0;$i<$ilosc;$i++){
                $tab[$i]=$_POST["ilosc$i"];
              }
            ?>
          <table>
            <tr><th>Krewny Lp.</th><th>Wiek</th></tr>
          </tr>
              <?php
              for($i=0;$i<$ilosc;$i++){
                echo "<tr><th>",$i+1,"</th><td>$tab[$i] lat</td></tr>";
              }
              echo "<tr><th>Średni wiek</th><td>",srednia($tab,$ilosc),"</td></tr>";
              echo "<tr><th>Najmłodszy</th><td>",najmlodszy($tab,$ilosc),"</td></tr>";
              echo "<tr><th>Najstarszy</th><td>",najstarszy($tab,$ilosc),"</td></tr>";
               ?>
            </table> <?php



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
