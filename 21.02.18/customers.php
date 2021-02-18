<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klienci</title>
</head>
<body>
<h1>Klienci</h1>
<?php 
  require_once './connect.php';
  if (!$connect->connect_errno){
    $sql = "SELECT cu.id, cu.name, cu.surname, c.city FROM `customers` as cu INNER JOIN city as c ON cu.cityid=c.id";
    $result = $connect->query($sql);

    while($customer = $result->fetch_assoc()){
      // print_r($customer);
      echo <<<CUSTOMER
        <b>Użytkownik $customers[id]:</b><br>
        Imię i nazwisko: $customer[name] $customer[surname]<br>
        Miasto: $customer[city]
        <hr>
CUSTOMER;
    }
  } else {
    echo "Błędne połączenie z bazą danych!<br>Błąd: ", $connect->connect_errno;
  }
?>
</body>
</html>