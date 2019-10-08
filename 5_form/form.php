<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!--<form action="./5_form/dane.php" method="post">-->
    <form method="post">
      <input type="text" name="imie" placeholder="podaj imie" autocomplete="off" autofocus><br><br>
      <input type="number" name="age" placeholder="podaj wiek"><br><br>
      <input type="submit" name="button" value="wyslij">
    </form>
    <?php
    if(!empty($_POST['imie']) &&!empty($_POST['age'])){
      $imie = $_POST['imie'];
      $imie2 = trim($imie);
      $imie2 = ucfirst(strtolower($imie2));
      $wiek = $_POST['age'];
      echo 'Przed poprawą: '.$imie.'<br>';
      echo 'Po poprawie: '.$imie2.'<br>';
      //echo '<table><tr><th>Imię</th><th>Wiek</th></tr>'.'<tr><td>'.$imie2.'</td><td>'.$wiek.'</td>';
      ?>
      <table>
        <tr>
          <th>Imię</th>
          <th>Wiek</th>
        </tr>
        <tr>
          <td> <?php echo $imie2; ?></td>
          <td> <?php echo $wiek; ?></td>
        </tr>
      </table>
      <?php
    }
     ?>
  </body>
</html>
