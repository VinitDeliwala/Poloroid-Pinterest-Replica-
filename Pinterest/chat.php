<?php
include 'connectdb.php';

	// user is not logged in.
	
		$chat = $_POST['comments'];
		$rid = $_GET['rid'];
		session_start();
		$sid=$_SESSION['uid'];
        session_write_close();
		
	
				$stmt = $mysqli->prepare("INSERT INTO `pinterest1`.`chat` (`sid`, `rid`, `chat`) VALUES (?,?, ?);");
				
				$stmt->bind_param('sss', $sid, $rid, $chat);
				/* execute prepared statement */
				$stmt->execute();				
				/* close statement and connection */
				$stmt->close();

				header("Location:chatpersonal.php?rid=".$rid."");
	
?>