<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klienci</title>
  </head>
  <body>
    <h3>Klienci</h3>
    <?php 
    // połączenie z bazą danych
    // $connect = mysqli_connect("localhost", "root", "", "zsl_3b3g2");
    $connect = @new mysqli("localhost", "root", "", "zsl_3b3g2");

    // @ operator ignorowania błędów
    // print_r($connect);
    
    // echo "<hr>", $connect->connect_error;
    // echo "<hr>Error: ", $connect->connect_errno;

    /* 
      0 - prawidłowe połączenie z db
      2002 - server
      1045 - user
      1045 - pass
      1049 - db
    */

    $sql = "SELECT * FROM `customers`";
    $result = $connect->query($sql);

    while($row = $result->fetch_assoc()){
      echo <<<SHOW
        Imię i nazwisko: $row[name] $row[surname],
        data urodzenia: $row[birthday], wzrost: $row[height]cm
        <br>
SHOW;
    };
    
    $connect->close();
    
    ?>
  </body>
</html>