<!-- Hubert Procyk 3B3T -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prostopadłościan</title>
  </head>
  <body>
    <h4>Prostopadłościan</h4><br>
    <img src="img/prostopadloscian.jpg"/>
    <hr>
    <h4>Dane</h4>
    <form method="post">
      <input type="number" name="a" placeholder="a"><br><br>
      <input type="number" name="b" placeholder="b"><br><br>
      <input type="number" name="c" placeholder="c"><br><br>
      <input type="submit" name="wynik" value="Oblicz">
    </form>
    <?php
    if(!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['c'])){
      if ($_POST['a'] <= 0 || $_POST['b'] <= 0 || $_POST['c'] <= 0 ){
        echo '<h4>Dane podane w formularzu muszą być liczbami dodatnimi!</h4>';
      } else {
        require_once('scripts/prostopadloscian.php');
        echo '<ul>';
        echo '<li>Pole: ',pole($_POST['a'], $_POST['b'], $_POST['c']),'cm<sup>2</sup></li>';
        echo '<li>Objętość: ',objetosc($_POST['a'], $_POST['b'], $_POST['c']),'cm<sup>3</sup></li>';
        echo '<li>Dlugość przekątnej: ',przekatna($_POST['a'],$_POST['b'],$_POST['c']),'cm</li>';
        echo '</ul>';
      }
    } else {
      if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])){
        if($_POST['a'] === '0' || $_POST['b'] === '0' || $_POST['c'] === '0' ){
          echo '<h4>Dane w formularzu nie mogą być 0!</h4>';
        } else {
          echo '<h4>Dane podane w formularzu muszą być liczbami dodatnimi!</h4>';
        }
      }
    }
    ?>
    <br><a href="3_zadanie_formularze_geometria.php">Powrót do strony głównej</a>
  </body>
</html>