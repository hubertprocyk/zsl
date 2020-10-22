<!-- Hubert Procyk 3B3T -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zadanko</title>
    <style>
      * {
        box-sizing: border-box;
      }
      p {
        margin: 0.5em;
      }
      span {
        color: red;
      }
      label {
        display: block;
        font-weight: bold;
        margin: 0.5em;
        width: 135px;
      }
      input[type="text"],
      input[type="tel"],
      select {
        width: 250px;
      }
      input[type="submit"]{
        display: block;
        margin: 0.5em;
      }
    </style>
  </head>
  <body>
    <p>(<span>*</span>) Required fields</p>
    <form action="./form_user_data.php" method="POST">
      <table>
        <tr>
          <td><label for="accountType">Account type<span>*</span></label></td>
          <td>
            <div>
              <input
                type="radio"
                name="accountType"
                value="personal"
                reqiured
                checked
              />
              Persnonal Account
            </div>
            <div>
              <input type="radio" name="accountType" value="business" />
              Business Account
          </div>
          </td>
        </tr>
        <tr>
          <td><label for="name">First Name<span>*</span></label></td>
          <td>
            <input
              type="text"
              pattern="[A-ZĄĆĘŁŃÓŚŹŻ]{1}[a-ząćęłńóśźż]{1,9}"
              name="name"
              required
            />
          </td>
        </tr>
        <tr>
          <td><label for="surname">Last Name<span>*</span></label></td>
          <td>
            <input
              type="text"
              pattern="[A-ZĄĆĘŁŃÓŚŹŻ]{1}[a-ząćęłńóśźż]{1,19}"
              name="surname"
              required
            />
          </td>
        </tr>
        <tr>
          <td><label for="country">Country/Region<span>*</span></label></td>
          <td>
            <select name="country" required>
              <option value="poland">Poland</option>
              <option value="usa" selected>United States</option>
              <option value="greece">Greece</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><label for="stAddress">Street Address<span>*</span></label></td>
          <td><input type="text" name="stAddress" required /></td>
        </tr>
        <tr>
          <td><label for="stAddress2">Street Address 2</label></td>
          <td><input type="text" name="stAddress2" /></td>
        </tr>
        <tr>
          <td><label for="city">City<span>*</span></label></td>
          <td><input type="text" name="city" required /></td>
        </tr>
        <tr>
          <td><label for="state">State/Province<span>*</span></label></td>
          <td>
            <select name="state" required>
              <option value="" selected disabled>Select State or Province</option>
              <option value="Wielkopolskie">Wielkopolskie</option>
              <option value="Zachodniopomorskie">Zachodniopomorskie</option>
              <option value="Malopolskie">Małopolskie</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><label for="zip">ZIP/Postal Code<span>*</span></label></td>
          <td><input type="text" name="zip" required pattern="[0-9]{2}-[0-9]{3}|[0-9]{5}" /></td>
        </tr>
        <tr>
          <td>
            <small></small><br />
            <label for="tel">Phone Number<span>*</span></label>
          </td>
          <td>
            <small>Only used for questions related to your order.</small><br />
            <input type="tel" name="tel" required />
          </td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="Submit" /></td>
        </tr>
      </table>
    </form>
  </body>
</html>