<?php
include 'connectdb.php';

	// user is not logged in.
	session_start();
	$uid = $_SESSION['uid'];
	$fid = $_SESSION['fid'];		
	
				$stmt = $mysqli->prepare("DELETE FROM `follower` WHERE `uid`='$uid' AND `fid`='$fid';");

				/* execute prepared statement */
				$stmt->execute();				
				/* close statement and connection */
				$stmt->close();
				header("Location:profilepage.php");
	
?>
