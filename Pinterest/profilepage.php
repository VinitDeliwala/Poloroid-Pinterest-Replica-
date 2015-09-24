<?php
include ('header.php');

session_start();
include('userProfile.php');
session_write_close();

?>

<link rel="stylesheet" type="text/css" href="profileboard.css">
<br>
<br>
<br>

<h1 align="center"><?php echo $name ?></h1>
<br>
<br>
<br>



<table align="center" border="0">
<tbody><tr>

<td><form method="LINK" action="profilepage boards.php" >
<button  class="button"  id="b1">
    <p class="head">Boards</p>
    <span><?php echo $bidCount ?></span>
</button>
</form></td>

<td><form method="LINK" action="profilepage groups.php">
<button class="button">
    <p class="head">Group</p>
    <span><?php echo $gidCount ?></span>
</button>
</form></td>

<td><form method="LINK" action="profilepage followers.php">
<button class="button">
    <p class="head">Followers</p>
    <span><?php echo $followerCount ?></span>
</button>
</form></td>


<td><form method="LINK" action="profilepage following.php">
<button class="button">
    <p class="head">Following</p>
    <span><?php echo $followingCount ?></span>
</button>
</form></td>

<TD ><FORM METHOD="LINK" ACTION="profilepage friends.php" >
<button class="button">
    <p class="head">Friends</p>
    <span><?php echo $friendCount ?></span>
</button>
</FORM></TD>


<td><form method="LINK" action="secretpage boards.php">
<button class="button">
    <p class="head">Secret Boards</p>
    <span><?php echo $secretCount ?></span>
</button>
</form></td>


</form></td></tr>

</tbody></table>








</body></html>