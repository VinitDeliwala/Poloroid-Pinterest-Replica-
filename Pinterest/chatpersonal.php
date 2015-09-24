<?php
include 'connectdb.php';
include 'header.php';

		
		$rid = $_GET['rid'];
		session_start();
		$sid=$_SESSION['uid'];
        session_write_close();


			?>
<html>
<link rel="stylesheet" type="text/css" href="profileboard.css">
<body>
<fieldset>
<?php
$query="SELECT `sid`,`chat` FROM `chat` WHERE (`rid`='$sid' AND `sid`='$rid') OR (`sid`='$sid' AND `rid`='$rid')  ORDER BY `ctime`;";
$result=$mysqli->query($query);
$count=0;
$sid = array();
$chat = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($sid, $row['sid']);
	array_push($chat, $row['chat']);
	
}
$sCount = sizeOf($sid);			
?>
<?php
for ($x = 0; $x < $sCount; $x++) 
{
$query="SELECT uname FROM `user` WHERE `uid`='$sid[$x]'";
$result=$mysqli->query($query);
While($row=$result->fetch_array())
{
	$name = $row['uname'];
}	
echo 'User: '.$name ;
echo '<br>';
echo 'Comments: '.$chat[$x];
echo '<br>';
}

echo '<br>';
echo '<form action="chat.php?rid='.$rid.'" method="post">';
echo 'Comments:<br />';
echo '<textarea name="comments" id="comments" rows="2" cols="50" placeholder="Hey... say something!"></textarea><br />';
echo '<input type="submit" value="Post" />';
echo '</form>';
			 
?>

</html>
</body>
</fieldset>
