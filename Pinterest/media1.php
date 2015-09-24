<?php
include 'connectdb.php';
include 'header1.php';
include 'xyz.php';
//echo $mname;
//echo $z;

//session_start();
//$a= $_SESSION['bid'];

//echo '<a href="media1.php?mid='.$z. '"><img src="' . $str3. '">';
?>
<!DOCTYPE html>
<html>
<body>

<h2><?php echo $mname ?></h2>

<img src="<?php echo $str3?>"  ><br>
Total number of likes:<?php echo ($likesCount-1) ?><br>
Media Description:<br>	<textarea name="description" placeholder="Board Description" rows="3" cols="50" readonly><?php echo $mtag ?></textarea><br>
<div id="buttonzone" align="left">

    <input type="button" onClick="location.href='like.php'" value="like">
    <input type="button" onClick="location.href='repinboard.php'" value="Pin">
	<input type="button" onClick="location.href='deletemedia.php'" value="Delete">

</div>
<form action="comment.php" method="post">
Comments:<br />
<textarea name="comments" id="comments" rows="10" cols="50" placeholder="Hey... say something!"></textarea><br />
<input type="submit" value="Post" />
</form>
<fieldset>

<?php
for ($x = 0; $x < $cCount; $x++) 
{
$query="SELECT uname FROM `user` WHERE `uid`='$cid[$x]'";
$result=$mysqli->query($query);
While($row=$result->fetch_array())
{
	$name = $row['uname'];
}	
echo 'User: '.$name ;
echo '<br>';
echo 'Comments: '.$ctext[$x];
echo '<br>';
}
?>

</fieldset>


</body>
</html>