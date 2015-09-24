<?php
$x= $_GET['fid'];
session_start();
            $_SESSION['fid'] = $x;
			$cd= $_SESSION['uid'];
			if($x!=$cd){
			header("Location:friendprofilepage.php");
			}
			else
			{header("Location:profilepage.php");}
?>
