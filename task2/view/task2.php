<html>
<body>
    <h1>Registration</h1>
    <form action="../control/process.php" method="post">
      <tr>
        <td>First Name :</td>
        <td><input type="text" name="fname"></td>
      </tr>
      <br>
      <tr>
        <td>Last Name :</td>
        <td>
          <input type="text" name="lname">
        </td>
      </tr>
      <br>
      <tr>
        <td>Age :</td>
        <td><input type="text" name="age"></td>
      </tr>
      <br>
      <tr>
        <td>Designation :</td>
        <td><input type="radio" name="button" value="Junior" />Junior</td>
        <td>
          Programmer <input type="radio" name="button" value="Senior" />Senior
        </td>
        <td>
          Programmer <input type="radio" name="button" value="lead" />Project
          Lead
        </td>
      </tr>
      <br>
      <tr>
        <td>Preferred Language :</td>
        <td><input type="checkbox" name="check1" value="java" />JAVA</td>
        <td><input type="checkbox" name="check2" value="php" />PHP</td>
        <td><input type="checkbox" name="check3" value="c++" />C++</td>
      </tr>
<br>
      <tr>
        <td>Email :</td>
        <td><input type="email" name="email" /></td>
      </tr>
      <br>
      <tr>
        <td>Password :</td>
        <td><input type="password" name="pass" /></td>
      </tr>
      <br>
      <tr>
        <td>PLease choose a file</td>
        <td><input type="file" name="file" /></td>
      </tr>
      <br>
      <input type="Submit" value="Submit" name="submit" />
      <input type="reset" value="reset" />
    </form>
  </body>
</html>