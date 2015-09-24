<?php
include 'connectdb.php';
$m= $_GET['gid'];
session_start();

$abc=$_SESSION['bid'];
echo $abc;
echo $m;
	
				$stmt = $mysqli->prepare("INSERT INTO `grouphas`(`gid`, `bid`) VALUES (?,?)");
	
				$stmt->bind_param('ss', $m, $abc);
				/* execute prepared statement */
				$stmt->execute();				
				/* close statement and connection */
				$stmt->close();
				echo "it worked";
				header("Location:profilepage.php");

?>
