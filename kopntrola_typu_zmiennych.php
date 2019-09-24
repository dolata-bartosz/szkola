<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <<?php
//KONTROLA TYPU ZMIENNYCH
    $x=10;
    echo is_int($x).'<hr>'; //true=>1
    echo is_string($x).'<hr>'; //false
    echo is_bool($x).'<hr>'; //false
    echo is_null($x).'<hr>'; //false
    echo is_float($x).'<hr>'; //false ->Nie zwraca nic, gdy jest false

    //Operator ignorowanie błędów @
    $w;
    echo @$w;
    echo @gettype($w).'<hr>'; //NULL
    echo @is_null($w).'<hr>'; //true =>

    #####################################
    //Zmienne superglobalne
    //$_GET, $_POST, $COOKIE, $_FILES, $_SESSION, $_SERVER
    echo $_SERVER['SERVER_PORT'].'<br>';//80
    echo $_SERVER['SERVER_NAME'].'<br>';//127.0.0.1
    echo $_SERVER['SCRIPT_NAME'].'<br>';//zsk....ścieżka
    echo $_SERVER['SERVER_PROTOCOL'].'<br>'; //HTTP/1.1
    echo $_SERVER['DOCUMENT_ROOT'].'<br>'; //HTTP/1.1

    //$lokalPliku = $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME'].'<br>';
    $lokalPliku = $_SERVER['DOCUMENT_ROOT'];
    $lokalPliku .= $_SERVER['SCRIPT_NAME'];
    echo $lokalPliku;
########################################################
//stałe
//nazwy z dużych liter!!!
    echo '<hr>';
    define('NAZWISKO', 'Kowal');
    echo NAZWISKO;

    define('nazwisko', 'Nowak', true); // od wersji 8 PHP brak trzeciego argumentu
    echo nazwisko;

    echo NazwISko; // teru w define powoduje ze nie bierze pod uwage liter

##########################################################
echo '<hr>';
//stałe predefiniowane
    echo PHP_VERSION; //7.3.0
    echo get_type(PHP_VERSION);

    if(PHP_VERSION > 5.6){
      echo "New";
    }else{
      echo "OLD<br>";
    }
    echo PHP_OS;
    echo __LINE__;
    echo __FILE__;
    echo __DIR__;
     ?>
  </body>
</html>
