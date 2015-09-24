<?php
include 'connectdb.php';																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												

session_start();
$x=$_SESSION['fid'];
$z=$_SESSION['uid'];
$uid = $x;
$y=$x;
session_write_close();

$query="SELECT distinct bid FROM createboard natural join board WHERE `uid`='{$uid}' and secret = 'N'";
$result=$mysqli->query($query);
$count=0;
$fbids = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($fbids, $row['bid']);
}
$fbidCount = sizeOf($fbids);

$query="SELECT distinct bname FROM createboard natural join board WHERE `uid`='{$uid}' and secret = 'N'";
$result=$mysqli->query($query);
$count=0;
$fbname = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($fbname, $row['bname']);
}
$fbnameCount = sizeOf($fbname);


$query="select distinct mid from repinboard natural join board natural join createboard where uid='{$uid}'";
$result=$mysqli->query($query);
$count=0;
$fpins = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($fpins, $row['mid']);
}
$fpinCount = sizeOf($fpins);


$query="SELECT count(mid) as countMID FROM `likecreate` WHERE `lid`='{$uid}'";
$result=$mysqli->query($query);
$count=0;
While($row=$result->fetch_array())
{
	$count=$count+1;
	$flikesCount = $row['countMID'];
}

$query="SELECT uname FROM `user` WHERE `uid`='{$uid}'";
$result=$mysqli->query($query);
While($row=$result->fetch_array())
{
	$fname = $row['uname'];
}

$query="SELECT distinct bname FROM createboard natural join board WHERE `fbid`='{$uid}' and secret = 'N'";
$result=$mysqli->query($query);
$count=0;
$ffbname = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($ffbname, $row['bname']);
}
$ffbnameCount = sizeOf($ffbname);

$query="SELECT distinct bid FROM createboard natural join board WHERE `fbid`='{$uid}' and secret = 'N'";
$result=$mysqli->query($query);
$count=0;
$ffbids = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($ffbids, $row['bid']);
}
$ffbidCount = sizeOf($ffbids);


$query="SELECT (uid) FROM `follower` WHERE fid='{$uid}'";
$result=$mysqli->query($query);
$count=0;
$ffollower = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($ffollower, $row['uid']);
}
$ffollowerCount = sizeOf($ffollower);


$query="SELECT (fid) FROM `follower` WHERE uid='{$uid}'";
$result=$mysqli->query($query);
$count=0;
$ffollowing = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($ffollowing, $row['fid']);
}
$ffollowingCount = sizeOf($ffollowing);


$query="SELECT distinct bid FROM createboard natural join board WHERE `uid`='{$uid}' and secret = 'Y'";
$result=$mysqli->query($query);
$count=0;
$fsecret = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($fsecret, $row['bid']);
}
$fsecretCount = sizeOf($fsecret);

$query="SELECT friendid FROM `friend` WHERE `uid`='{$uid}' AND `secret`=1";
$result=$mysqli->query($query);
$count=0;
$ffname = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($ffname, $row['friendid']);
}
$ffriendCount = sizeOf($ffname);


$query="SELECT distinct bid FROM createboard natural join board WHERE `uid`='{$uid}' and secret = 'Y'";
$result=$mysqli->query($query);
$count=0;
$fsecret = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($fsecret, $row['bid']);
}
$fsecretCount = sizeOf($fsecret);


$query="select distinct bname from board where bid in (select bid from createboard natural join board where uid ='$x' and secret='Y' and '$z' in (Select uid from friend where friendid='$x' AND secret='1'));";
$result=$mysqli->query($query);
$count=0;
$fsname = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($fsname, $row['bname']);
}
$fsecretCount = sizeOf($fsname);

$query="SELECT `gid` FROM `group` WHERE `uid`='{$uid}'";
$result=$mysqli->query($query);
$count=0;
$fgids = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($fgids, $row['gid']);
}
$fgidCount = sizeOf($fgids);

$query="SELECT `gname` FROM `group` WHERE `uid`='{$uid}'";
$result=$mysqli->query($query);
$count=0;
$fgname = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($fgname, $row['gname']);
}
$fgnameCount = sizeOf($fgname);



?>
