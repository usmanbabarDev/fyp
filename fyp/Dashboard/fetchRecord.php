<?php
 //include_once("include/db_connect.php");
 // include db connection
 include '../include/config.php';
 
if($_REQUEST['empid']) {
	$sql = "SELECT *
	FROM bill_catagory 
	WHERE id='".$_REQUEST['empid']."'";
	$resultSet = mysqli_query($con, $sql);	
	$empData = array();
	while( $emp = mysqli_fetch_assoc($resultSet) ) {
		$empData = $emp;
	}
	echo json_encode($empData);
} else {
	echo 0;	
}
?>