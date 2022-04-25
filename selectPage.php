<?php
include('config.php');

$sql = "SELECT * FROM stud";

$query = mysqli_query($con, $sql);

if (!$query) {
    echo "Query does not work." . mysqli_error($con);
    die;
}
?>
<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    table {
        width: 70%;
        border: 2px solid blue;
        padding: 4px;
    }

    th {
        border: 3px solid black;
    }

    td {
        border: 1px solid black;
        text-align: center;
    }
</style>
<table>
    <tr>
        <th>Id</th>
        <th>Full Name</th>
        <th>E-mail</th>
        <th>Mobile No.</th>
        <th>Address</th>
        <th>City</th>
        <th>Pincode</th>
        <th colspan=" 2">Update/Delete</th>
    </tr>
    <?php
    while ($data = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $data[0] ?></td>
            <td><?php echo $data[1] ?></td>
            <td><?php echo $data[2] ?></td>
            <td><?php echo $data[3] ?></td>
            <td><?php echo $data[4] ?></td>
            <td><?php echo $data[5] ?></td>
            <td><?php echo $data[6] ?></td>
            <td><button><a href="updatePage.php?id=<?php echo $data[0] ?>">U</a></button></td>
            <td><button><a href="deletePage.php?id=<?php echo $data[0] ?>">D</a></button></td>
        </tr>
    <?php } ?>
</table>
<br /><br />
<a href="index.php">Home</a>