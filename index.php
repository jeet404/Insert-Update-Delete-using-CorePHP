<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Registration Form</title>
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <script src="js/main.js" type="text/javascript"></script>
</head>

<body>
  <div class="title">
    <h2>Student Registration</h2>
  </div>
  <div class="main">
    <form action="insertPage.php" method="post">
      <table align="center" cellpadding="10">
        <tr>
          <td>Full Name:-</td>
          <td><input type="text" name="fName" maxlength="50" /></td>
        </tr>
        <tr>
          <td>Email ID:-</td>
          <td>
            <input type="email" name="emailId" id="mail" onChange="mailchk()" required />
          </td>
        </tr>
        <tr>
          <td>Mobile Number:-</td>
          <td>
            <input type="text" name="mobileNumber" maxlength="10" placeholder="10 Digits Allowed" />
          </td>
        </tr>
        <tr>
          <td>Address:-<br /><br /><br /></td>
          <td><textarea name="Address" rows="5" cols="50"></textarea></td>
        </tr>
        <tr>
          <td>City:-</td>
          <td><input type="text" name="City" maxlength="50" /></td>
        </tr>
        <tr>
          <td>Pin Code:-</td>
          <td>
            <input type="Number" name="pinCode" maxlength="6" placeholder="Max 6 Numbers Allowed" />
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" value="Submit" name="save" />
            <input type="reset" value="Reset" />
            <button><a href="selectPage.php">View Data</a></button>
          </td>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>