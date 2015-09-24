<?php
include 'connectdb.php';

session_start();
$second=$_SESSION['uid'];
$first=$_GET['friendid'];

$stmt = $mysqli->prepare("DELETE FROM `friend` WHERE `uid`='$first' AND `friendid`='$second';");
				
				/* execute prepared statement */
				$stmt->execute();				
				/* close statement and connection */
				$stmt->close();
				header("Location:message.php");

	
?>
