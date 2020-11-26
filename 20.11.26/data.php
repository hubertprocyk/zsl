<!-- Hubert Procyk 3B3T -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Członkowie rodziny</title>
  </head>
  <body>
    <?php 
      if (isset($_POST['family'])) {
        echo "<h4>Ilość członków rodziny: ", $_POST['family'],"</h4>";
      }
    ?>
    <?php
      if(isset($_POST['button'])) {
        echo "<h4>Dane członków rodziny </h4>";
        $count = 0;
        require_once("script/script.php");
        for($i = 1; $i < count($_POST); $i++) {
          if (!empty($_POST["person$i"])) {
            $count++;
            echo "Osoba $count: ", sanitizer($_POST["person$i"]), "<br><br>";
          }
        }
      } else if(!empty($_POST['family']) && is_numeric($_POST['family']) && $_POST['family'] >= 1) {
        ?>
        <form method="POST">
          <?php 
            for($i = 1; $i <= $_POST['family']; $i++) {
              echo "<input type=\"text\" name=\"person$i\" placeholder=\"Osoba $i\" /><br><br>";
            }
          ?>
          <input type="submit" value="Wyślij dane" name="button"/>
        </form>
        <?php
      } else {
        header('location: ./');
      }
      // dodać funkcję która "czyści dane od użytkownika"
      // usuwa białe znaki, zamienia każdą pierwszą literę na dużą, reszta małe
      // funkcję dodaj do katalogu script
      // zabezpiecz strony! np. zmiana typu pola, liczby dodatnie, literry w polach (person)
    ?>
  </body>
</html>
