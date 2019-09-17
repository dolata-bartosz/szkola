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
  echo $x . '<br';
  $x = $x << 2; //10100
  echo $x . '<br';

  $a=1;
  $b=1.0;
  if($a === $b){
    echo "identyczne";
  } else echo "rozne";

  echo gettype($a);
  echo gettype($b);

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
?>

  </body>
</html>
