<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h4>Dane użytkownika</h4>
  <form action="./form_dane.php" method="post">
    <input 
      type="text" 
      name="surname" 
      placeholder="Nazwisko" 
      autofocus 
      required 
      pattern="[a-ząćęłńóśźżA-ZĄĆĘŁŃÓŚŹŻ]{2,5}"
      autocomplete="off"
    ><br>
    <select name="gender">
      <option selected disabled>Wybierz opcję</option>
      <option value="m">Mężczyzna</option>
      <option value="f">Kobieta</option>
    </select><br>
    <input type="submit" value="Wyślij formularz">
  </form>
</body>
</html>