<?php
include 'header.php';
include 'friendProfile.php';				
?>
<link rel="stylesheet" type="text/css" href="profileboard.css">
<br>
<br>
<br>


<h1 align="center"><?php echo $fname ?></h1>
<br>
<br>
<br>



<table align="center" border="0">
<tbody><tr>

<td><form method="LINK" action="fprofilepageboards.php">
<button class="button">
    <p class="head">Boards</p>
    <span><?php echo $fbidCount ?></span>
</button>
</form></td>

<td><form method="LINK" action="fprofilepagegroups.php">
<button class="button">
    <p class="head">Group</p>
   <span><?php echo $fgidCount ?></span>
</button>
</form></td>



<td><form method="LINK" action="followme.php">
<button class="button">
    <p class="head">Follow Me</p>
	<span><br></span>
	
</button>
</form></td>

<td><form method="LINK" action="unfollowme.php">
<button class="button">
    <p class="head">Unfollow Me</p>
	<span><br></span>
	
</button>
</form></td>

<td><form method="LINK" action="addfriend.php">
<button class="button">
    <p class="head">Add Friend</p>
    <span><br></span>
</button>
</form></td>

<td><form method="LINK" action="fprofilepagefollowers.php">
<button class="button">
    <p class="head">Followers</p>
    <span><?php echo $ffollowerCount ?></span>
</button>
</form></td>


<td><form method="LINK" action="fprofilepage following.php">
<button class="button">
    <p class="head">Following</p>
    <span><?php echo $ffollowingCount ?></span>
</button>
</form></td>

<TD ><FORM METHOD="LINK" ACTION="fprofilepage friends.php" >
<button class="button">
    <p class="head">Friends</p>
    <span><?php echo $ffriendCount ?></span>
</button>
</FORM></TD>


<td><form method="LINK" action="fsecretpage boards.php">
<button class="button">
    <p class="head">Secret Boards</p>
    <span><?php echo $fsecretCount ?></span>
</button>
</form></td>


</form></td></tr>

</tbody></table>






</body></html>