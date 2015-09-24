<?php
include 'connectdb.php';
$m= $_GET['bid'];
session_start();

$abc=$_SESSION['mid'];
	
				$stmt = $mysqli->prepare("INSERT INTO `pinterest1`.`repinboard` (`bid`, `mid`) VALUES (?,?)");
	
				$stmt->bind_param('ss', $m, $abc);
				/* execute prepared statement */
				$stmt->execute();				
				/* close statement and connection */
				$stmt->close();
				echo "it worked";
				header("Location:profilepage.php");

?>
