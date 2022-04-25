<?php
include('config.php');

if (isset($_POST['save'])) {
   $full_name = $_POST['fName'];
   $email = $_POST['emailId'];
   $mobile_no = $_POST['mobileNumber'];
   $address = $_POST['Address'];
   $city = $_POST['City'];
   $pincode = $_POST['pinCode'];

   $sql = "INSERT INTO stud VALUES(NULL,'$full_name','$email','$mobile_no','$address','$city','$pincode')";

   if (mysqli_query($con, $sql)) {
      header('location:index.php');
   } else {
      echo "Error: " . $sql . ":- " . mysqli_error($con);
   }
   mysqli_close($con);
}
?>