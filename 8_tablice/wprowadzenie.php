<?php
  //tablice indeksowane numerycznie
  $colors = array('red', 'green','blue');
  $colors[3] = 'magenta';
    function showArray($tab){
      for($i=0;$i<count($tab);$i++){
        $elem = $i+1;
        echo "Element $elem: $tab[$i] <br>";
      }
    }
  showArray($colors);
    echo "<hr>";
  ###############################################
  //foreach
    foreach ($colors as $key => $value) {
      $elem =$key+1;
      echo "Element $elem: $value <br>";
    }
    echo "<hr>";
  ###############################################
  //tab assocjacyjna
    $data= array(
      'imie' => 'Janusz',
      'nazwisko' => 'Nowak',
      'wiek' => 30,
    );
    function showArrayAsoc($tab){
      foreach ($tab as $key => $value) {
        echo "$key: $value <br>";
      }
    }
    showArrayAsoc($data);
    echo "$data[imie]";
    echo "<hr>";
  ###############################################
  //tablice wielowiarowe
  $student = array(
    array('Katarzyna','Nowak',30),
    array('Anna','Kowal',35),
    array('Marysia','Bąk',20)
  );
      function showArrayNew($tab){
          for($i=0;$i<count($tab);$i++){
              for($j=0;$j<count($tab[$i]);$j++){
                echo $tab[$i][$j]." ";
              }
              echo "<br>";
          }
      }
  showArrayNew($student);
  echo "<hr>";
  function showArrayNewforeach($tab){
      foreach ($tab as $value) {
        foreach ($value as $x) {
          echo $x." ";
        }
        echo "<br>";
      }
  }
  showArrayNewforeach($student);
  echo "<hr>";
  ###############################################
  //trzywymiar
  $trzy = array(
    array(
      array('Nowak','Łukasz'),array('Mleczak','Jakub')
    ),
    array(
      array('Jajko','Bartek'),array('Bujny','Norbo')
    ),
    array(
      array('Ewald','Patryk'),array('Fujfuj','Juch')
    ),
    array(
      array('Nowak','Łukasz'),array('Mleczak','Jakub')
    ),
    array(
      array('Jajko','Bartek'),array('Bujny','Norbo')
    ),
    array(
      array('Ewald','Patryk'),array('Fujfuj','Juch')
    )
  );
  function wyswietl3wymiar($tab){
    foreach ($tab as $value) {
      foreach ($value as $x) {
        foreach ($x as $y) {
          echo $y." ";
        }
        echo "<br>";
      }
      echo "<br>";
    }
  }
  wyswietl3wymiar($trzy);
  echo "<hr>";
  ###############################################
  //sortowanie
    $tab = array(10,2,5,75,-4,100);

    function wyswietl($tab){
      foreach ($tab as $value) {
          echo $value, ' ';
      }
      echo '<br>';
    }
    wyswietl($tab);
    sort($tab);
    wyswietl($tab);
    rsort($tab);
    wyswietl($tab);

  echo "<hr>";
  ###############################################
  //
  $tab = array("katarzyba","Anna","Zenen","paweł");
  wyswietl($tab);
  sort($tab);
  wyswietl($tab);
  echo "<hr>";
  ###############################################
  //
  function namale(&$tab){
    for($i=0;$i<count($tab);$i++){
      $tab[$i]=strtolower($tab[$i]);
    }
  }
  echo "<hr>";
  namale($tab);
  wyswietl($tab);
  sort($tab);
  wyswietl($tab);
  function pierwsza(&$tab){
    for($i=0;$i<count($tab);$i++){
      $tab[$i]=ucfirst($tab[$i]);
    }
  }
  pierwsza($tab);
  wyswietl($tab);
    echo "<hr>";
  ###############################################
  //sortowanie asocjacyjnej wedlug wartosci
  $tabAssoc = array(
    'name' => 'Janusz',
    'wiek' => 30,
    'country' => 'Polska',
    'city' => 'Poznań'
  );
    showArrayAsoc($tabAssoc);
    asort($tabAssoc);
    echo "<hr>";
    showArrayAsoc($tabAssoc);
    arsort($tabAssoc);
    echo "<hr>";
    showArrayAsoc($tabAssoc);
    #############################################
    //sortowanie asocjacyjnej wedlug wartosci
    echo "<hr>";
    showArrayAsoc($tabAssoc);
    ksort($tabAssoc);
    echo "<hr>";
    showArrayAsoc($tabAssoc);
    krsort($tabAssoc);
    echo "<hr>";
    showArrayAsoc($tabAssoc);
    echo "<hr>";
    ############################################
    //wyswietlanie danych
    var_dump($tabAssoc);
    echo "<hr>";
    print_r($tabAssoc);
    echo "<hr>";
    echo "<pre>";
    print_r($tabAssoc);
    echo "</pre>";
    echo "<hr>";
  ?>
