<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="addperson";
$conn=mysqli_connect($server_name,$username,$password,$database_name);

$id= $_GET['id'];
$q= "DELETE FROM person WHERE id=$id";

mysqli_query($conn, $q);

header('location:home.php');

 ?>
