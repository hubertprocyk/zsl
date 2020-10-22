<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularze</title>
  </head>
  <body>
    
    <?php
    if (!empty($_GET["surname"]) & !empty($_GET["name"] )) {
      $surname = $_GET["surname"];
      $name = $_GET["name"];
      $name = ucfirst(strtolower(trim($name)));
      $surname = ucfirst(strtolower(trim($surname)));
      echo "Imie: i nazwisko: $name $surname<hr>";
      echo '<a href="./5_zadanko.php">Powrót do formularza</a>';
    } else {
      echo <<<FORM
        <form action="#" method="get">
        Imie:
        <input type="text" name="name" autofocus><br>
        Nazwisko
        <input type="text" name="surname"><br>
        <input type="submit" value="Wyślij"><hr>
        </form>
FORM;
    }

    

    ?>
  </body>
</html>