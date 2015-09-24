<?php
include 'connectdb.php';

 if (!isset($_POST['submit']))
    {
		echo "Error";
	}
	else{
	// user is not logged in.
		session_start();
		$uid = $_SESSION['uid'];
		$n = $_POST['uname'];
        $d = $_POST['DOB'];
        $p = $_POST['password'];
		

				$stmt = $mysqli->prepare("UPDATE `pinterest1`.`user` SET `uname` = ?, `DOB` = ?, `password` = ? WHERE `user`.`uid` = '$uid';");
				$uname=$n;
				$DOB=$d;
				$password=$p;
				$stmt->bind_param('sss',$uname, $DOB, $password);
			
				/* execute prepared statement */
				$stmt->execute();				
				/* close statement and connection */
				$stmt->close();
				header("Location:profilepage.php");
				
	}
?>
