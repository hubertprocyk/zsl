<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dane</title>
</head>
<body>
  <h4>Dane użytkownika</h4>
  <form action="./data_show.php" method="get">
    Login<input type="text" name="login" placeholder="Login" autofocus><br>
    Hasło<input type="password" name="pass" placeholder="Hasło"><br>
    Kolor <input type="radio" name="color" value="r">Czerwony
    <input type="radio" name="color" value="g">Zielony
    <input type="radio" name="color" checked value="b">Niebieski<br>
    <input type="checkbox" name="regulamin">Zatwierdzenie regulaminu<br>
    <input type="submit" value="Wyślij dane">
  </form>
</body>
</html>