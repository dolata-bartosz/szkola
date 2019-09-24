<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $name = 'Janusz';
      $_name1 = 'Janusz';
      $imię = 'Janusz';
      echo "$name".$_name1;
      echo "$name",$_name1;

      $prawde = true;

      //typ inreger

      $całkowita = 10;
      $hex = 0xA;
      $oct = 010;
      $bin=0b1010;

      echo $bin, "hex" . $całkowita , '<hr>';

      //składnia heredoc;
      $imie= 'Kasia';
      $nazwsko = 'Nowak';
      $text = <<< ETYKIETA
        Twoje imie: $imie<br>
        Twoje nazwisko: $nazwsko<hr>
ETYKIETA;
      // drugi sposób
      echo <<< E
      imię: $imie<br>
E;
      echo $text;

      //składnia nowdoc
      echo <<< 'E'
      Imię: $imię<br>
E;
    echo "<hr> Nazwa zmiennej: \$imię, wartość zmiennej imie: $imie";
     ?>
  </body>
</html>
