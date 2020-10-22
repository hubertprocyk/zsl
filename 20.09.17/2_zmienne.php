<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zmienne</title>
</head>
<body>
  <?php
    $name = "Janusz";
    $surname = "Nowak";
    echo "Imie: $name<br>";
    //konkatenacja za pomocą .
    echo "Nazwisko: $surname<br>".'<hr>';
    echo "test";
  
    // typy danych
    // boolean
    $prawda = true;
    $falsz = false;
    echo $prawda;
    echo $falsz;
    echo '<hr>';

    //integer
    $bin = 0b1010; //10
    $oct = 010; //8
    $dec = 20; //20
    $hex = 0xB; //11
    echo $hex,'<hr>';

    //składnia heredoc
    $name = "Krystyna";
    $text = <<< ETYKIETA
      Imię: $name
      Nazwisko: $surname<hr>
      ETYKIETA;
    echo $text;

    echo <<< E
      Heredoc 2<br>
      Imie: $name
    E;

    //nowdoc
    echo <<< 'E'
      Heredoc 2<br>
      Imie: $name<hr>
    E;

    $city = 'Poznań';
    echo "Nazwa zmiennej: \$city, wartość: $city";
  ?>
</body>
</html>