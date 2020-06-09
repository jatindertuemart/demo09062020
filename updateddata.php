<?php

include 'dbconnection.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

extract($_REQUEST);
$response = array();
//$response["area"] = array();


	$sql = $conn->prepare("UPDATE bookissue SET bookreturn='$return' WHERE id='$id'");

	$sql->execute();

?>