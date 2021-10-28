<?php
   require_once 'connect.php';
  // require_once '../register.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql  = "INSERT INTO pette_data(username, email, password) VALUES ('$username', '$email', '$password');";

$query = mysqli_query($conn, $sql);
if($query)
   echo 'data inserted successfully';
//header("Location: ../regsiter.php?signup=success");


