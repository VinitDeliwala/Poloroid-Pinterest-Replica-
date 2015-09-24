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
	else
	{
		$n = $_POST['uname'];
        $d = $_POST['DOB'];
		$u = $_POST['email'];
        $p = $_POST['password'];
		include 'connectdb.php';

				$stmt = $mysqli->prepare("INSERT INTO `user`(`uid`, `uname`, `email`, `DOB`, `password`) VALUES (?,?,?,?,?)");
				$uid=NULL;
				$uname=$n;
				$email=$u;
				$DOB=$d;
				$password=$p;
				$stmt->bind_param('sssss', $uid, $uname, $email, $DOB,$password);
				/* execute prepared statement */
				$stmt->execute();				
				/* close statement and connection */
				$stmt->close();
				header("Location:index.html");
	}
?>
</body>
</html>