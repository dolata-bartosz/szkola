<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      table, td, th{
        border: 1px solid black;
        border-collapse: collapse;
        padding:10px;
      }
    </style>
  </head>
  <body>
      <form method="post">
        wiersze:<input type="number" name="number">
        kolumny:<input type="number" name="number1">
        <input type="submit" name="but" value="wyślij">
      </form>
      <table>
      <?php
        if(isset($_POST['but'])&&!empty($_POST['number'])&&!empty($_POST['number1'])){
          $wiersze=$_POST['number'];
          $kolumny=$_POST['number1'];
          $i=1;
          $j=0;
            echo '<tr>';
            do{
              
              echo '<th>',$j,'</th>';
              $j++;
            }while($j<=$kolumny);
            echo '</tr>';
          do{
            echo '<tr>';
            echo '<th>',$i,'</th>';
            $j=1;
            do{
              $wynik=$i*$j;
              echo '<td>',$wynik,'</td>';
              $j++;
            }while($j<=$kolumny);
            $j=1;
            echo '</tr>';
            $i++;
          }while($i<=$wiersze);
        }
       ?>
       </table>
  </body>
</html>
