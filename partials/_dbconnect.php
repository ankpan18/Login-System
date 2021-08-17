<?php
// $server = "localhost";
$server = "127.0.0.1:3304";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server, $username, $password, $database);
// if ($conn -> connect_errno) {
//     echo "##############################################";
//     echo "Failed to connect to MySQL: " . $conn -> connect_error;
//     exit();
//   }
// if (!$conn){
//     // echo "success";
// // }
// // else{
//     die("Error". mysqli_connect_error());
// }

?>
