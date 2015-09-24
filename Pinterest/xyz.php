<?php
include 'connectdb.php';

session_start();
$a= $_SESSION['bid'];
$z=$_GET['mid'];
$_SESSION['mid']=$z;


$query="select mname,mtag from media where mid='$z';";
$result=$mysqli->query($query);

While($row=$result->fetch_array())
{
	$mname = $row['mname'];
	$mtag = $row['mtag'];
}

$query="SELECT count(lid) as countMID FROM `likecreate` WHERE `mid`='$z'";
$result=$mysqli->query($query);
$count=0;
While($row=$result->fetch_array())
{
	$count=$count+1;
	$likesCount = $row['countMID'];
}

			'<div class="pin">';
			$str1="$mname";
			$str2=".jpg";
			$str4="img/";
			$str3 = $str4.$str1.$str2;
			$str3;
			'<a href="media1.php?mid='.$z. '"><img src="' . $str3. '">';
			"<p>$mname</p>";
				
			'</div>';

$query="SELECT `cid`,`ctext` FROM `comment` WHERE `mid`='$z' AND `bid`='$a' ORDER BY `ctime` DESC;";
$result=$mysqli->query($query);
$count=0;
$cid = array();
$ctext = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($cid, $row['cid']);
	array_push($ctext, $row['ctext']);
	
}
$cCount = sizeOf($cid);			
			

?>