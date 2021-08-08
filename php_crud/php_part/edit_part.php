<?php
if(isset($_POST['submit']))
{
  $id=$_GET['id'];
$first_name=$_POST['firstName'];
$last_name=$_POST['lastName'];
$age=$_POST['age'];
date_default_timezone_set('Asia/Kolkata');
$t = date('m M Y g:i:s');

$sql_query="UPDATE person SET id=$id, first_name='$first_name', last_name='$last_name', age=$age, modified='$t' where id=$id;";
$query=mysqli_query($conn,$sql_query);

header('location:home.php');

}

if(isset($_POST['cancel']))
{
  header('location:home.php');

  }

  $id=$_GET['id'];
  $q="SELECT  * FROM person WHERE id=$id";
  $result=mysqli_query($conn,$q);
  $rows=mysqli_fetch_array($result);
