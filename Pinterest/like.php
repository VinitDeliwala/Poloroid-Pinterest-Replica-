<?php
include 'connectdb.php';

	// user is not logged in
	 	
		session_start();
		$la=$_SESSION['uid'];
		$xya = $_SESSION['mid'];
		session_write_close();
				
				$stmt = $mysqli->prepare("INSERT INTO `pinterest1`.`likecreate` (`lid`, `mid`, `uid`) VALUES (?,?,?);");
				$bid = $la;
				$stmt->bind_param('ssi', $la, $xya , $bid);
				$stmt->execute();				
				/* close statement and connection */
				$stmt->close();

				header("Location:board.php");
?>