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
    echo is_int($x); //true=>1
    echo is_string($x); //false
    echo is_bool($x); //false
    echo is_null($x); //false
    echo is_float($x); //false

    //Operator ignorowanie błędów @
    $w;
    echo @$w;
    echo @gettype($w); //NULL
    echo @is_null($w); //true =>

    #####################################
    //Zmienne superglobalne
    //$_GET, $_POST, $COOKIE, $_FILES, $_SESSION, $_SERVER
    echo $_SERVER['SERVER_PORT'],'<br>';//80
    echo $_SERVER['SERVER_NAME'],'<br>';//127.0.0.1
    echo $_SERVER['SCRIPT_NAME'],'<br>';//zsk....ścieżka
    echo $_SERVER['SERVER_PROTOCOL'],'<br>'; //HTTP/1.1
    echo $_SERVER['DOCUMENT_ROOT'],'<br>'; //HTTP/1.1
     ?>
  </body>
</html>
