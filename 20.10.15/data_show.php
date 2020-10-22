<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dane usera</title>
</head>
<body>
  <h4>Dane z formualarza</h4>
  <?php
    //echo '<pre>',print_r($_GET),'</pre>';
    $pass = $_GET['pass'];
    $color = $_GET['color'];
    switch ($color) {
      case 'r':
        $color = 'czerwony';
        break;
      case 'b':
        $color = 'zielony';
        break;
      case 'g':
        $color = 'niebieski';
        break;
    }

    if(isset($_GET['regulamin'])){
      $reg = 'Regulamin zatwierdzony';
    } else {
      $reg = 'Prosze zatwierdzić regulamin';
    }

    echo <<<DATA
      Login: $_GET[login]<br>
      Hasło: {$_GET['pass']}<br>
      Hasło: $pass<br>
      Kolor: $color<br>
      $reg<br>
DATA;
  ?>
</body>
</html>