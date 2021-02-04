<?php 
  $tab = array(1, 11, 20, -1, 20);

  function t($tab){
    foreach($tab as $value){
      echo "$value ";
    }
    echo "<br>";
  }

  t($tab);
  // sort. rsort, asort, arsort, ksort, krsort
  // sortowanie niemalejące
  sort($tab);
  t($tab);

  // sortowanie nierosnące
  rsort($tab);
  t($tab);

  $names = array('Katarzyna', 'anna', "Józef", "krystyna");
  t($names);
  sort($names);
  t($names);

  //zamiena na małe litery
  function replaceLowerCase(&$tab) {
    foreach($tab as $key => $value){
      $replace = strtolower($value);
      $tab[$key] = $replace;
      echo "$replace ";
    }
  }

  replaceLowerCase($names);
  t($names);
  sort($names);
  t($names);

  // sortowanie tablic asocjacyjnych
  $tabAsoc = array("name" => "Janusz", "surname" => "Nowak", "age" => 21);
  t($tabAsoc);

  // sortowanie niemalejące wg. zawartości
  asort($tabAsoc);
  t($tabAsoc);

  // sortowanie nierosnące wg. zawartości
  arsort($tabAsoc);
  t($tabAsoc);

  // sortowanie niemalejące wg. klucza
  ksort($tabAsoc);
  t($tabAsoc);

  // sortowanie nierosnące wg. klucza
  krsort($tabAsoc);
  t($tabAsoc);

  // wyświetlenie danych z tablicy
  echo "<pre>";
    var_dump($tabAsoc);
  echo "</pre>";
?>