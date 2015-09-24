<!DOCTYPE html>

<html>
<head>
  
<style>

@font-face {
    font-family: myFirstFont;
    src: url(font/v.ttf);
}
.button{
	font-family: myFirstFont;
	color:#2f4f4f; 
	background-color:#fed; 
	border:1px solid; 
	border-color: #696 #363 #363 #696; 
}

.button1{
	font-family: myFirstFont;
	border-color: #696 #363 #363 #696; 
} 
</style>

<body>
<form id="search" action="search.php" method="POST">	
<div id="buttonzone" align="right" width="100px" class="button1">
<input name ='Search' type="text" placeholder="Search..." required>
    <input type="radio" name="secret" value="0" /> Exact
    <input type="radio" name="secret" value="1" checked /> Advance
    <input type="radio" name="secret" value="2" /> Latest
	<input type="radio" name="secret" value="3" /> Likes
	<input type="submit" value="Search" class="button" />
</form>

    <input type="button" onClick="location.href='profilepage.php'" value="hOME" class="button">
	<input type="button" onClick="location.href='message.php'" value="Message" class="button">
    <input type="button" onClick="location.href='update2.html'" value="Update" class="button">
    <input type="button" onClick="location.href='logout.php'" value="Logout" class="button">


</div>
</form>
</body>


</html>