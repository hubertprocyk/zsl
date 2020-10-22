<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formularz</title>
  <style>
    th{
      background-color: pink;
    }
  </style>
</head>
<body>
  <form action="./form_show.php" method="get">
    <table border>
      <tr>
        <th>Name</th>
        <th>Value</th>
      </tr>
      <tr>
        <td>Name</td>
        <td><input type="text" name="name" autofocus></td>
      </tr>
      <tr>
        <td>Sex</td>
        <td>
          <input type="radio" name="sex" value="m">Male<br>
          <input type="radio" name="sex" value="f">Female
        </td>
      </tr>
      <tr>
        <td>Eye color</td>
        <td>
          <select name="eyecolor">
            <option value="brown">brown</option>
            <option value="blue">blue</option>
            <option value="green">green</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Check all that apply</td>
        <td>
          <input type="checkbox" name="height"> Over 6 feet tall<br>
          <input type="checkbox" name="weight"> Over 200 pounds<br>
        </td>
      </tr>
      <tr>
         <td colspan="2">
           Describe your athletic ability:<br>
           <textarea name="athleticability"cols="40" rows="5"></textarea>
         </td>
      </tr>
      <tr>
         <td colspan="2" align="center">
           <input type="submit" value="Enter my information">
         </td>
      </tr>
    </table>
  </form>
</body>
</html>