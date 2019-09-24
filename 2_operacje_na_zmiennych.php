<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
  $potega = 2**10;
  echo $potega.'<hr>';
  //operatory bitowe: and &, or |, not ~, xor ^, >>, <<

  $x=0b1010;
  $x = $x >> 1; //101
  echo $x . '<br>';
  $x = $x << 2; //10100
  echo $x . '<br>';

  $a=1;
  $b=1.0;
  if($a === $b){
    echo "identyczne".'<hr>';
  } else echo "rozne".'<hr>';

  echo gettype($a).'<hr>';
  echo gettype($b).'<hr>';

  $x = 11;
  $y = 1;
  $wynik = $x <=> $y;
  echo $wynik;

  ###########################################################
  $x = 2;
  echo $x++; //2
  echo ++$x; //4
  echo $x; //4
  $y=$x++;
  echo $y; //4
  $y= ++$x;
  echo $y; //6
  echo ++$y;  //7
  ###########################################################

  $text1 = '4ssd';
  $text2 = 'Drugi tekst';
  $text3 = '7';
  $number = 15;
  $j = -1;
  $c = 100;
  //operatory rzutowania;
  // bool int float string aray object unset
  $x = (int)$text1;
  echo '<br>', $x;

  $x= (bool)$j;
  echo $x;

  $c = (unset)$c;
  echo $c; //null
  echo gettype($c); //null

  $l=(float)$number;
  echo gettype($l);
  echo $l;

  echo PHP_INT_SIZE; //8
  $w;
  echo @gettype($w);



?>

  </body>
</html>
