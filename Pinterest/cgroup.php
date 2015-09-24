<?php
include 'connectdb.php';

		$gg = $_POST['gname'];
		session_start();
		$u=$_SESSION['uid'];
		session_write_close();
		
		$stmt1 = $mysqli->prepare("INSERT INTO `group`(`gid`, `gname`, `uid`) VALUES (?,?,?)");
				$gid= NULL;
				$gname= $gg;
				$uid= $u;
				$stmt1->bind_param('sss', $gid, $gname, $uid);
				/* execute prepared statement */
				$stmt1->execute();				
				/* close statement and connection */
				$stmt1->close();
				header("Location:profilepage.php");
				
?>