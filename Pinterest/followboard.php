<?php
include 'connectdb.php';
	// user is not logged in

		$bid = $_GET['bid'];
 		session_start();
		$as=$_SESSION['uid'];
		session_write_close();
		
				$stmt = $mysqli->prepare("INSERT INTO `createboard` (`fbid`, `bid`) VALUES (?,?)");
				
				$stmt->bind_param('ss', $as , $bid);
				$stmt->execute();				
				/* close statement and connection */
				$stmt->close();
				
				header("Location:profilepage.php");

	
?>
