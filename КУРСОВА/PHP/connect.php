<?php
// $user = $_POST['user'];
// $email = $_POST['email'];
// $password = $_POST['password'];

// // Database connection
// $conn = new mysqli('localhost', 'root', '','register');
// if($conn->connect_error){
//     die('Connection Failed :'.$conn->connect_error);
// }else{
//     $statement = $conn->prepare("Insert into regis(user,email,password)
//     values(?,?,?)");
//     $statement->bind_param("sss",$user,$email, $password);
//     echo "registration successful";
//     $statement->close();
//     $conn->close();
//}


$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "pette_users";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

?>