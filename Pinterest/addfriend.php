<?php

include 'connectdb.php';

	// user is not logged in.
	session_start();
	$first = $_SESSION['uid'];
	$second = $_SESSION['fid'];		
	
				$stmt = $mysqli->prepare("INSERT INTO `pinterest1`.`friend` (`uid`, `friendid`, `secret`) VALUES (?,?,?)");

				$ab=0;
				
				$stmt->bind_param('ssi', $first, $second, $ab);
				/* execute prepared statement */
				$stmt->execute();				
				/* close statement and connection */
				$stmt->close();
				header("Location:friendprofilepage.php")

?>