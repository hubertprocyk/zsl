<!-- Hubert Procyk 3B3T -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>kalkulator</title>
  </head>
  <body>
    <h1>Kalkulator</h1>
    <?php
      require_once("function.php");
      $result = '';
      
      if(isset($_POST["first"]) and isset($_POST["second"])){
        $first = $_POST["first"];
        $second = $_POST["second"];
        switch($_POST["operation"]){
          case "add":
            $result = add($first, $second);
          break;
          case "subtract":
            $result = subtract($first, $second);
          break;
          case "multiply":
            $result = multiply($first, $second);
          break;
          case "divide":
            $result = divide($first, $second);
          break;
        }
      }
      ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <input type="number" name="first" required/>
      <select name="operation" required>
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
      </select>
      <input type="number" name="second" required/>
      <input type="submit" value="=" id="submit"/>
      <input type="text" disabled  id="result"/>
      <?php if (isset($result)): ?>
        <script>document.getElementById("result").value = "<?php echo $result ?>"</script>
      <?php endif ?>
    </form>
  </body>
</html>
