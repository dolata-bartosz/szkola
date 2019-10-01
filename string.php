<?php
  $text = <<<TEKST
  zsk - Zespół
  Szkół Komunikacji
TEKST;

  echo "przed użyciem funkcji nl2br:<br> $text <br>";
  echo "<br>Po użyciu funkcji<br>";
  echo nl2br($text);
###########
  $text = "Janusz";
  //zamiana na male
  echo strtolower($tekst),'<br>';
  //zamiana na duze
  echo strtoupper($tekst),'<br>';

  $text = 'janusz Kowalski poznań';
  echo ucfirst($tekst),'<br>'; //zamiana pierszej lietey na duza
  echo ucwords($tekst),'<br>'; //zamiana wszystkich pierwszych

################################################
  $lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
  echo $lorem, '<hr>';
  $col = wordwrap($lorem, 35, '<br>');
  $col = wordwrap($lorem, 35, '<hr>');
  echo $col;

################################################
//czyszczenie zawartości bufora

  ob_clean();
  ###############################################
  //usuwanie białych znakówarning
  $name = 'Janusz';
  $name1 = '     Janusz          ';

  echo 'Długość zmiennej $name: ',strlen($name),'<br>';
  echo 'Długość zmiennej $name1: ',strlen($name1),'<br>';

  echo strlen(ltrim($name1)),'<br>';
  echo strlen(rtrim($name1)),'<br>';
  echo strlen(trim($name1)),'<br>';

  //przeszukiwanie ciagow

  $address = 'Poznan ul.Fredry 13, tel. (61) 445-44-58';
  $search = strstr($address, 'tel');
  echo $search,'<br>';

  $address = 'Poznan ul.Fredry 13, tel. (61) 445-44-58';
  $search = strstr($address, 'tel',true);
  echo $search,'<br>';

  $address = 'Poznan ul.Fredry 13, tel. (61) 445-44-58';
  $search = stristr($address, 'Tel',true);
  echo $search,'<br>';

  $mail = strstr('zsk@gmail.com', '@');
  echo $mail,'<br>';

  $mail = strstr('zsk@gmail.com', 64);
  echo $mail,'<br>';

  ################################################
  //porównywanie ciągów
  $ciag1 = 'a';
  $ciag2 = 'aa';
  echo strcmp($ciag1, $ciag2),'<br>';
  echo strcmp('z', 'z'),'<br>';
  echo strcmp('a', 'z'),'<br>';
  echo strcmp('z', 'a'),'<br>';
  echo strcmp('z', 'az'),'<br>';

  //pozycja
    $pos = strpos('abcdefghi','cde');
    echo $pos,'<br>';
    $pos = strpos('abcdefghi','abc');
    echo $pos,'<br>';
    /*
    Zadanie 1
    Sprwadz czy w ciagu o nazwie text1 znajduje sie ciag o nazwie text2
    */
    $text1 = 'abcdabcd';
    $text2 = 'ab';
 ?>
