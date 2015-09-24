<?php
include 'connectdb.php';
	// user is not logged in.
	
		$ctext = $_POST['comments'];
		session_start();
		$a=$_SESSION['uid'];
        $b=$_SESSION['bid'];
		$c=$_SESSION['mid'];
        session_write_close();
		date_default_timezone_set('Australia/Melbourne');
		$timezone = date_default_timezone_get();
		$now = new DateTime();
		
	
				$stmt = $mysqli->prepare("INSERT INTO `pinterest1`.`comment` (`cid`, `bid`, `mid`, `ctext`) VALUES (?, ?, ?, ?);");
				
				$stmt->bind_param('ssss', $a, $b, $c,$ctext);
				/* execute prepared statement */
				$stmt->execute();				
				/* close statement and connection */
				$stmt->close();
				
				header("Location:board.php");
	
?>