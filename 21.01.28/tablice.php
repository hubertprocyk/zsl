<?php 
  //tablice indeksowane
  $colors = array('biały', 'zielony', 'czerwony');

  echo 'Rozmiar tablicy: ', count($colors), '<br>';
  echo 'Pierwszy element tablicy: ', $colors[0], '<br>';
  echo 'Ostatni element tablicy: ', $colors[2], '<br>';
  echo 'Ostatni element tablicy: ', $colors[count($colors)-1], '<br><br>';

  for($i = 0; $i < count($colors); $i++) {
    echo "Kolor ", $i+1, ": ", ucfirst($colors[$i]), "<br>";
  }


  function zmien_kolory(&$array, $c1, $c2, $c3) {
    $array[0] = $c1;
    $array[1] = $c2;
    $array[2] = $c3;
  }
  function wypisz_kolory($array) {
    for($i = 0; $i < count($array); $i++) {
      echo $i+1," kolor: ", ucfirst($array[$i]), "<br>";
    }
  }
  zmien_kolory($colors, "aqua", "magenta", "cyan");
  wypisz_kolory($colors);

  $x = array('klucz1'=>'x', 'klucz2'=>'y');
  echo $x['klucz1'], "<br>";

  $data = array(
    'name' => 'Janusz',
    'surname' => 'Kowalski',
    'age' => 20
  );

  echo '<br>Nazwisko: ', $data['surname'], '<br>';
  echo <<<TAB
    Imię: {$data['name']}<br>
    Nazwisko: {$data['surname']}<br>
TAB;

  foreach($colors as $value) {
    echo "$value ";
  }
  echo "<br>";

  foreach($data as $value) {
    echo "$value ";
  }
  echo "<br>";

  foreach($data as $key => $value) {
    echo ucfirst($key), ": $value<br>";
  }
  
  echo '<pre>';
    print_r($colors);
  echo '</pre>';

  echo '<pre>';
    print_r($data);
  echo '</pre>';

  function wypisz($array){
    foreach($array as $key => $value) {
      echo ucfirst($key), ": $value<br>";
    }
    echo "<hr>";
  }
  wypisz($colors);
  wypisz($data);
?>