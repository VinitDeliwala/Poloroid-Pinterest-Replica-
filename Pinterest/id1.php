<?php
$m= $_GET['bid'];
session_start();
$_SESSION['bid'] = $m;
header("Location:board.php");
?>
