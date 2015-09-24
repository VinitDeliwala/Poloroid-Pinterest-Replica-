<?php
include 'connectdb.php';

	// user is not logged in.
	session_start();
	$uid = $_SESSION['uid'];
	$fid = $_SESSION['fid'];		
	
				$stmt = $mysqli->prepare("INSERT INTO `follower`(`uid`, `fid`) VALUES (?,?);");

				$stmt->bind_param('ss', $uid, $fid);
				/* execute prepared statement */
				$stmt->execute();				
				/* close statement and connection */
				$stmt->close();
				header("Location:profilepage.php");
	
?>
