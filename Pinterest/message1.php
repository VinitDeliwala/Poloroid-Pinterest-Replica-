<?php
include 'connectdb.php';

session_start();
$second=$_SESSION['uid'];
$first=$_GET['friendid'];


$stmt = $mysqli->prepare("UPDATE `pinterest1`.`friend` SET `uid` = ?, `friendid` = ?, `secret` = ? WHERE `friend`.`uid` = '$first' AND `friend`.`friendid` = '$second';");
$ab=1;
				$stmt->bind_param('sss',$first, $second, $ab);
				/* execute prepared statement */
				$stmt->execute();				
				/* close statement and connection */
				$stmt->close();
				header("Location:message.php");

	
?>
