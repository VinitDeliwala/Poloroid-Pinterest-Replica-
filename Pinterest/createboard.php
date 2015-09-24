<?php
include 'connectdb.php';
include 'header.php';
	// user is not logged in
	 if (!isset($_POST['submit']))
    {
		echo "Error";
	}
	else
	{

		$b = $_POST['bname'];
        $d = $_POST['tag'];
		$u = $_POST['type'];
        $p = $_POST['secret'];
		session_start();
		$as=$_SESSION['uid'];
		$zs=$_SESSION['bid'];
		session_write_close();
		
		
				$stmt1 = $mysqli->prepare("INSERT INTO `board`(`bid`, `bname`, `tag`, `type`, `secret`) VALUES (?,?,?,?,?)");
				$bid= NULL;
				$bname= $b;
				$tag= $d;
				$type=$u;
				$secret = $p;
				$stmt1->bind_param('sssss', $bid, $bname, $tag, $type,$secret);
				/* execute prepared statement */
				$stmt1->execute();				
				/* close statement and connection */
				$stmt1->close();
				
				$query="SELECT bid FROM `board` WHERE `bname`='{$b}'";
				$result=$mysqli->query($query);
				While($row=$result->fetch_array())
				{
					$name = $row['bid'];
				}

		
				$stmt = $mysqli->prepare("INSERT INTO `createboard` (`uid`,`bid`) VALUES (?,?)");
				$bid = $name;
				$stmt->bind_param('ss', $as , $name);
				$stmt->execute();				
				/* close statement and connection */
				$stmt->close();
				header("Location:profilepage.php");

	}
?>