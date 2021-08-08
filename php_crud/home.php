<?php
  include 'php_part/database.php';
  include 'php_part/home_part.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <title>Home</title>
  <body>
    <nav>
      <a class="nav-class" href="home.php">HOME</a> |
      <a class="nav-class" href="addperson.php">ADD PERSON</a> |
    </nav>
    <button class="addbutton"><a style="text-decoration:none; color:white;"href="addperson.php">Add Person</a></button>
    <div class="container">
      <div class="box">
        <h4 class="homeheader">Person List</h4>
        <?php if(mysqli_num_rows($result)) {?>
        <table class="center">
          <thead>
                <tr>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Age</th>
                  <th scope="col">Created</th>
                  <th scope="col">Modified</th>
                  <th scope="col">Modify</th>
                  <th scope="col">Delete</th>
                </tr>
        </thead>
        <tbody>

          <?php
            while($rows=mysqli_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $rows['first_name'];?></td>
            <td><?php echo $rows['last_name'];?></td>
            <td><?php echo $rows['age'];?></td>
            <td><?php echo $rows['created'];?></td>
            <td><?php echo $rows['modified'];?></td>
            <td><a href="edit.php?id=<?=$rows['id']?>" class="button1" >Edit</a></td>
              <td><a href="delete.php?id=<?=$rows['id']?>" class="button2">Delete</a></td>
         </tr>
        <?php } ?>
        </tbody>
    </table>
      <?php } ?>
      </div>
    </div>
  </body>
</html>
