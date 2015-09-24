<?php
include 'header.php';
include 'connectdb.php';

session_start();
$uid = $_SESSION['uid'];
session_write_close();

$query="SELECT `uid` FROM `friend` WHERE `friendid`='{$uid}' AND `secret`='0'";
$result=$mysqli->query($query);
$count=0;
$friend = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($friend, $row['uid']);
}
$friendCount = sizeOf($friend);

$query="SELECT friendid FROM `friend` WHERE `uid`='{$uid}' AND `secret`=1";
$result=$mysqli->query($query);
$count=0;
$fname = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($fname, $row['friendid']);
}
$ffriendCount = sizeOf($fname);
?>
<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="profileboard.css">
<style>
p{
		font-family: myFirstFont;
}
.button{
	font-family: myFirstFont;
	color:#2f4f4f; 
	background-color:#fed; 
	border:1px solid; 
	border-color: #696 #363 #363 #696; 
}
</style>
</head>
<body>

<form id="search" action="search1.php" method="POST">	
<div id="buttonzone" align="left" width="100px">
<input name ='Search' type="text" placeholder="Search a friend..." required>
	<input type="submit" value="Search" class="button" />
</form>
</body>
</html>



<?php
echo '<p> Pending Friend Request</p>';

for ($x = 0; $x < $friendCount; $x++) 
{
$query="SELECT uname FROM `user` WHERE `uid`='$friend[$x]'";
$result=$mysqli->query($query);
While($row=$result->fetch_array())
{
	$name = $row['uname'];
}	
echo 'User: '.$name ;
echo '<br>';
echo  '<a href="message1.php?friendid='.$friend[$x]. '"><input type="Button"  name="secret" value="Yes" class="button"/></a>';
echo '<br>';
echo  '<a href="message2.php?friendid='.$friend[$x]. '"><input type="Button"  name="secret" value="No "  class="button"/></a>';
echo '<br>';	

}

?>

<?php 
echo '<p>Chat: </p>';
			for ($x = 0; $x < $ffriendCount; $x++) {
				
				$query="SELECT uname FROM `user` WHERE `uid`='{$fname[$x]}'";
				$result=$mysqli->query($query);	
				While($row=$result->fetch_array())
				{
					$name = $row['uname'];
					
					echo  '<a href="chatpersonal.php?rid='.$fname[$x].'"><input type="Button"  name="secret" value='.$name.' class="button" /></a>';
				
				}
			}
?>