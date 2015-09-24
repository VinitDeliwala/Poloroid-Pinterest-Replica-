<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="css/login.css">
<head>
</head>
<body>
<?php
include 'connectdb.php';
	// user is not logged in.
    if (!isset($_POST['submit']))
    {
		echo "Error";
	}
	else{
		$u = $_POST['email'];
        $p = $_POST['password'];
		
		$query="SELECT * FROM user where email='{$u}'  AND password='{$p}'";
		$result=$mysqli->query($query);
		$count=0;
		While($row=$result->fetch_array())
		{
		$count=$count+1;
		$uid = $row['uid'];
		}
		if ( $count == 0)
        {
            echo "Wrong id or password!";
            include "index.html";
        } else 
		{
            $row = $result->fetch_array();
			session_start();
            $_SESSION['uname'] = $u;
			$_SESSION['uid'] = $uid;
			header("Location:landingpage.php");
		}
	}
?>
</body>
</html>