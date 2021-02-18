<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Różne tabelki</title>
  </head>
  <body>
    <h3>bruh</h3>
    <?php 
    $connect = @new mysqli("localhost", "root", "", "tabelki rozne");

    $sql = "SELECT * FROM `uzytkownicy`";
    $result = $connect->query($sql);

    while($row = $result->fetch_assoc()){
      echo <<<SHOW
        Imie: $row[imie], Nazwisko $row[nazwisko], szcześliwa liczba $row[trzecia_kolumna]
        <br>
SHOW;
    };
    
    $connect->close();
    
    ?>
  </body>
</html>