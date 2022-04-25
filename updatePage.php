<?php
include("config.php");

if (isset($_POST['update'])) {

    $sid =  $_POST['id'];
    $full_name = $_POST['fName'];
    $email = $_POST['emailId'];
    $mobile_no = $_POST['mobileNumber'];
    $address = $_POST['Address'];
    $city = $_POST['City'];
    $pincode = $_POST['pinCode'];

    $res = mysqli_query($con, "UPDATE stud SET s_fullname='$full_name',s_email='$email',s_mobileno='$mobile_no',s_address='$address',s_city='$city',s_pin='$pincode' WHERE s_id = '$sid'");
    if ($res) {
        header("Location: index.php");
    }
}
?>
<?php
$id = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM stud WHERE s_id=$id");

while ($data = mysqli_fetch_array($sql)) {
    $fname = $data[1];
    $emailId = $data[2];
    $mno = $data[3];
    $add = $data[4];
    $cty = $data[5];
    $pin = $data[6];
}
?>
<html>

<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <a href="index.php">Home</a>
    <br /><br />

    <div class="main">
        <form action="updatePage.php" method="post">
            <table align="center" cellpadding="10">
                <td><input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" /></td>
                <tr>
                    <td>Full Name:-</td>
                    <td><input type="text" name="fName" maxlength="50" value="<?php echo $fname; ?>" /></td>
                </tr>
                <tr>
                    <td>Email ID:-</td>
                    <td>
                        <input type="email" name="emailId" id="mail" value="<?php echo $emailId; ?>" onChange="mailchk()" required />
                    </td>
                </tr>
                <tr>
                    <td>Mobile Number:-</td>
                    <td>
                        <input type="text" name="mobileNumber" value="<?php echo $mno; ?>" maxlength="10" placeholder="10 Digits Allowed" />
                    </td>
                </tr>
                <tr>
                    <td>Address:-<br /><br /><br /></td>
                    <td><textarea name="Address" rows="5" cols="50"><?php echo $add; ?></textarea></td>
                </tr>
                <tr>
                    <td>City:-</td>
                    <td><input type="text" name="City" maxlength="50" value="<?php echo $cty; ?>" /></td>
                </tr>
                <tr>
                    <td>Pin Code:-</td>
                    <td>
                        <input type="Number" name="pinCode" maxlength="6" placeholder="Max 6 Numbers Allowed" value="<?php echo $pin; ?>" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Update" name="update" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>