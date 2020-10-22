<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularze</title>
  </head>
  <body>
    
    <?php
    if (!empty($_GET["surname"])) {
      $surname = $_GET["surname"];
      echo "Wprowadziłeś dane: $surname<hr>";
      echo '<a href="./5_form.php">Powrót do formularza</a>';
    } else {
      echo <<<FORM
        <form action="#" method="get">
        <input type="text" name="surname" autofocus><br>
        <input type="submit" value="Wyślij"><hr>
        </form>
FORM;
    }

    

    ?>
  </body>
</html>