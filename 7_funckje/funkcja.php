<?php
  function wartosc($a): string{
    if($a < 0){
      return 'ujemna';
    }else if($a==0){
      return 'zero';
    }else {
      return 'dodatnia';
    }
  }
  $x = 5;
  echo wartosc($x); //dodatnia
  echo '<hr>',gettype(wartosc($x)); //string

  function getValue():int{
    return 5.99;
  }
  echo '<hr>',getValue();
  ####################################################
  //zasięg zmiennych
  $x = 10;
  function wyswietl(){
    echo '<hr>',"Wartosc zmiennej x wynosi ";
    echo $GLOBALS['x'];
  }
  wyswietl();
  ####################################################
  $y=7;
  function wyswietlY(){
    global $y;
    echo "<hr>","Wartość zmiennej y wynosi: $y";
  }
  wyswietlY();
  ####################################################

  function suma(){
    $liczba = 10;
    echo "<br>","zmienna liczba wynosi $liczba";
    $liczba +=10;
  }
  suma();
  suma();

  function suma1(){
    static $liczba = 10;
    echo "<br>","zmienna liczba wynosi $liczba";
    $liczba +=10;
  }
  suma1();
  suma1();

  ####################################################
// argumenty

  function add($x, $y =1){
    return $x + $y;
  }
  $z = 10;
  echo "<br>", add($z);
  echo "<br>", add($z,20);
  echo "<br>", add(1,20);
  ####################################################
// typy

  function multi(float $x, int $y){
    return $x * $y;
  }
  echo "<hr>", multi(2, 3);
  echo "<hr>", multi(3.5, 2);
  echo "<hr>", multi(3, 2.5);

 ?>
