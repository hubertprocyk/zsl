<!-- Hubert Procyk 3B3T -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data i czas</title>
    <style>
      #three{
        width: 100px;
      }
      #four{
        width: 220px;
      }
    </style>
  </head>
  <body>
    <?php 
      $today = getdate();

      setlocale(LC_TIME, "pl");
      $one = strftime("%Y-%m-%d");
      $two = strftime("%H:%M");
      $three = strftime("%A");
      $four = strftime("%d %B %Y, %T | %A");

      function daysInYear() {
        $data = getdate();
        if($data['year'] % 4 == 0) {
          return "366 dni (rok przestępny)";
        } else {
          return "365 dni";
        }
      }

      function daysTillEndOfYear() {
        $data = getdate();
        if($data['year'] % 4 == 0) {
          return 366 - ((int)$data['yday'] + 1);
        } else {
          return 365 - ((int)$data['yday'] + 1);
        }
      }
    ?>
    <h2>Data i czas</h2>
    <input id="one" type="date" value="<?php echo $one ?>"><br><br>
    <input id="two" type="time" value="<?php echo $two ?>"><br><br>
    <input id="three" type="text" value="<?php echo $three ?>"><br><br>
    <input id="four" type="text" value="<?php  echo $four ?>"><br><br>

    <p>Ilość dni w roku: <?php echo daysInYear() ?></p>
    <p>Dzień roku: <?php echo $today['yday'] + 1 ?></p>
    <p>Numer tygodnia w roku: <?php echo date('W') ?></p>
    <p>Dni do końca roku: <?php echo daysTillEndOfYear() ?></p>
  </body>
</html>
