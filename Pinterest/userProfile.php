<?php
include 'connectdb.php';

$uid = $_SESSION['uid'];
session_write_close();

$query="SELECT distinct bid FROM createboard natural join board WHERE `uid`='{$uid}' and secret = 'N'";
$result=$mysqli->query($query);
$count=0;
$bids = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($bids, $row['bid']);
}
$bidCount = sizeOf($bids);

$query="SELECT distinct bname FROM createboard natural join board WHERE `uid`='{$uid}' and secret = 'N'";
$result=$mysqli->query($query);
$count=0;
$bname = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($bname, $row['bname']);
}
$bnameCount = sizeOf($bname);

$query="SELECT distinct bname FROM createboard natural join board WHERE `fbid`='{$uid}' and secret = 'N'";
$result=$mysqli->query($query);
$count=0;
$fbname = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($fbname, $row['bname']);
}
$fbnameCount = sizeOf($fbname);

$query="SELECT distinct bid FROM createboard natural join board WHERE `fbid`='{$uid}' and secret = 'N'";
$result=$mysqli->query($query);
$count=0;
$fbids = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($fbids, $row['bid']);
}
$fbidCount = sizeOf($fbids);


$query="select distinct mid from repinboard natural join board natural join createboard where uid='{$uid}'";
$result=$mysqli->query($query);
$count=0;
$pins = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($pins, $row['mid']);
}
$pinCount = sizeOf($pins);


$query="SELECT count(mid) as countMID FROM `likecreate` WHERE `lid`='{$uid}'";
$result=$mysqli->query($query);
$count=0;
While($row=$result->fetch_array())
{
	$count=$count+1;
	$likesCount = $row['countMID'];
}

$query="SELECT uname FROM `user` WHERE `uid`='{$uid}'";
$result=$mysqli->query($query);
While($row=$result->fetch_array())
{
	$name = $row['uname'];
}



$query="SELECT (uid) FROM `follower` WHERE fid='{$uid}'";
$result=$mysqli->query($query);
$count=0;
$follower = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($follower, $row['uid']);
}
$followerCount = sizeOf($follower);


$query="SELECT (fid) FROM `follower` WHERE uid='{$uid}'";
$result=$mysqli->query($query);
$count=0;
$following = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($following, $row['fid']);
}
$followingCount = sizeOf($following);


$query="SELECT distinct bid FROM createboard natural join board WHERE `uid`='{$uid}' and secret = 'Y'";
$result=$mysqli->query($query);
$count=0;
$secret = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($secret, $row['bid']);
}
$secretCount = sizeOf($secret);


$query="SELECT distinct bname FROM createboard natural join board WHERE `uid`='{$uid}' and secret = 'Y'";
$result=$mysqli->query($query);
$count=0;
$sname = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($sname, $row['bname']);
}
$secretCount = sizeOf($sname);

$query="SELECT friendid FROM `friend` WHERE `uid`='{$uid}' AND `secret`=1";
$result=$mysqli->query($query);
$count=0;
$fname = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($fname, $row['friendid']);
}
$friendCount = sizeOf($fname);




$query="SELECT `gid` FROM `group` WHERE `uid`='{$uid}'";
$result=$mysqli->query($query);
$count=0;
$gids = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($gids, $row['gid']);
}
$gidCount = sizeOf($gids);

$query="SELECT `gname` FROM `group` WHERE `uid`='{$uid}'";
$result=$mysqli->query($query);
$count=0;
$gname = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($gname, $row['gname']);
}
$gnameCount = sizeOf($gname);



?>
