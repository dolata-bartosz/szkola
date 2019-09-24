<?php
  $text = <<<TEKST
  zsk - Zespół
  Szkół Komunikacji
TEKST;

  echo "przed użyciem funkcji nl2br:<br> $text <br>";
  echo "<br>Po użyciu funkcji<br>";
  echo nl2br($text);
 ?>
