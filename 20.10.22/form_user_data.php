<!-- Hubert Procyk 3B3T -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form user data</title>
</head>
<body>
  <?php 
    //echo '<pre>',print_r($_POST),'</pre>';
    $invalid = [
      empty($_POST['name']),
      empty($_POST['surname']),
      empty($_POST['stAddress']),
      empty($_POST['city']),
      empty($_POST['zip']),
      empty($_POST['tel']),
      !preg_match('/^[0-9]{2}-[0-9]{3}|[0-9]{5}$/', $_POST['zip']),
      !in_array(strlen($_POST['zip']), [5, 6]),
      !preg_match('/^[A-ZĄĆĘŁŃÓŚŹŻ]{1}[a-ząćęłńóśźż]{1,9}$/', $_POST['name']),
      !preg_match('/^[A-ZĄĆĘŁŃÓŚŹŻ]{1}[a-ząćęłńóśźż]{1,19}$/', $_POST['surname']),
      !in_array($_POST['country'], ['poland', 'usa', 'greece']),
      !in_array($_POST['state'], ['Wielkopolskie', 'Zachodniopomorskie', 'Małopolskie']),
      !in_array($_POST['accountType'], ['personal', 'business'])
    ];

		if (in_array(true, $invalid)) {
	?>
	Wprowadzono niepoprawne dane. Za chwilę nastąpi przekierowanie do formularza.
	<script type="text/javascript">
		setTimeout(function() {
			history.back();
		}, 3000); 
	</script>
	<?php
		} else {
      switch($_POST['accountType']){
        case 'personal':
          $accountType = 'Osobiste';
        break;
        case 'business':
          $accountType = 'Biznesowe';
        break;
      }
      $name = $_POST['name'];
      $surname = $_POST['surname'];
      switch($_POST['country']){
        case 'poland':
          $country = 'Polska';
        break;
        case 'usa':
          $country = 'Stany Zjednoczone';
        break;
        case 'greece':
          $country = 'Grecja';
        break;
      }
      $stAddress = $_POST['stAddress'];
      $stAddress2 = $_POST['stAddress2'];
      $zip = $_POST['zip'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $tel = $_POST['tel'];
      
      echo <<<DATA
        Konto: $accountType<br>
        Imię i nazwisko: $name $surname<br>
        Kraj: $country<br>
        Adres 1: $stAddress<br>
        Adres 2: $stAddress2<br>
        Kod pocztowy i miasto: $zip $city<br>
        Województwo: $state<br>
        Numer telefonu: $tel<br>
DATA;
    }
  ?>
</body>
</html>