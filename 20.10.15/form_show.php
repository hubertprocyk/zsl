<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dane z formularza</title>
</head>
<body>
  <h4>Dane z formualarza</h4>
    <?php
      echo '<pre>',print_r($_GET),'</pre>';
      
      $sex = $_GET['sex'];
      switch ($sex) {
        case 'm':
          $sex = 'male';
          break;
        case 'f':
          $sex = 'female';
          break;
      }
      if(isset($_GET['height'])){
        $height = 'Height: Over 6 feet tall';
      } else {
        $height = 'Height: Under 6 feet tall';
      }
      if(isset($_GET['weight'])){
        $weight = 'Weight: Over 200 pounds';
      } else {
        $weight = 'Weight: Under 200 pounds';
      }

      echo <<<DATA
      Name: $_GET[name]<br>
      Sex: $sex<br>
      Eye color: $_GET[eyecolor]<br>
      $height<br>
      $weight<br>
      Athlletic ability: $_GET[athleticability]

DATA;
    ?>
</body>
</html>