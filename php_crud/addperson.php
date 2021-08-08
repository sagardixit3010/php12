<?php
  include 'php_part/database.php';
  include 'php_part/addperson_part.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/addperson.css">
    <title>Add Person</title>
  </head>
  <body>
    <nav>
      <a class="nav-class" href="home.php">HOME</a> |
      <a class="nav-class" href="addperson.php">ADD PERSON</a> |
    </nav>
    <div align="center">
      <h1>Add Person</h1>
      </div>
    <form action="" method="POST">
      <table align="center">
        <tr>
          <td>
            <label>First Name</label>
            <input style="height:20px;" type="text" name="firstName" value="">
          </td>
        </tr>
        <tr>
          <td>
            <label>LastName</label>
            <input style="height:20px;" type="text" name="lastName" value="">
          </td>
        </tr>
        <tr>
          <td>
            <label>Age</label>
            <input style="height:20px;" type="number" name="age">
          </td>

        </tr>
        <tr>
          <td colspan="2" style="padding-top:50px;">
              <input class="submit" type="submit" name="submit" value="ADD">
              <input class="cancel" type="submit" name="cancel" value="CANCEL">
          </td>
        </tr>

    </table>


    </form>

  </body>
</html>
