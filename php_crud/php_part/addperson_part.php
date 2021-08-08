<?php
if(isset($_POST['submit']))
{
$first_name=$_POST['firstName'];
$last_name=$_POST['lastName'];
$age=$_POST['age'];
date_default_timezone_set('Asia/Kolkata');
$t = date('m M Y g:i:s');
$sql_query="INSERT INTO person (first_name,last_name,age,created,modified) VALUES ('$first_name','$last_name','$age','$t','$t')";

if(mysqli_query($conn, $sql_query))
{
  echo "New Person Successfully inserted";
  header('location:home.php');
}
else {
  echo "Error" . $sql . "" . mysqli_error($conn);
}

mysqli_close($conn);

}
if(isset($_POST['cancel']))
{
  header('location:home.php');
  }
