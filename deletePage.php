<?php
include('config.php');
$id = $_GET['id'];
$res = mysqli_query($con, "DELETE FROM stud WHERE s_id=$id");
header("Location:index.php");
?>