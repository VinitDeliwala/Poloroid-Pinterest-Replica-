<?php
include 'connectdb.php';

	// user is not logged in.
	session_start();
$a= $_SESSION['bid'];
$z=$_SESSION['mid'];
$as=$_SESSION['uid'];
$bs=$_SESSION['fid'];



$query="SELECT uid FROM `createboard` WHERE `bid`='{$a}'";
$result=$mysqli->query($query);
While($row=$result->fetch_array())
{
	$bname = $row['uid'];
}

if($as==$bname){	
				$stmt = $mysqli->prepare("DELETE FROM `repinboard` WHERE `bid`='$a' AND `mid`='$z';");

				/* execute prepared statement */
				$stmt->execute();				
				/* close statement and connection */
				$stmt->close();
				header("Location:profilepage.php");
}
else{

				header("Location:profilepage.php");
}
	
?>
