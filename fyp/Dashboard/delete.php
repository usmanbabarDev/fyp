<?php
include '../include/config.php';
$ID = (isset($_GET['Id']) ? $_GET['Id'] : '');
// delete the item by using ID of the table
mysqli_query($con, "DELETE FROM bill_catagory WHERE Id = $ID");
header('location:bill-catagory.php')

?>