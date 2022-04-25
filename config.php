<?php
$servername = "localhost"; // 0.0.0.0:3306
$username = "root";
$password = ""; //blank/null/empty
#$password = "root"; //For mobile users
$db = "stud_info";
// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

if (!$con) {
    die('Could not Connect MySql Server:' . mysqli_error($con));
} 
//else {
//     echo "<script>alert('Connected');</script>";
// }
