<?php
include 'php_part/database.php';
include 'php_part/edit_part.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Person</title>
    <link rel="stylesheet" href="css/edit.css">
  </head>
  <body>
    <div align="center">
      <h1>Edit Person</h1>
      </div>
    <form action="" method="POST">
      <table align="center">
        <tr>
          <td>
            <label>First Name</label>
            <input style="height:20px;" type="text" name="firstName" value="<?=$rows['first_name']?>" required>
          </td>
        </tr>
        <tr>
          <td>
            <label>LastName</label>
            <input style="height:20px;" type="text" name="lastName" value="<?=$rows['last_name']?>" required>
          </td>
        </tr>
        <tr>
          <td>
            <label>Age</label>
            <input style="height:20px;" type="number" name="age" value="<?=$rows['age']?>" required>
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
