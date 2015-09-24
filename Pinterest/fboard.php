<?php
include 'connectdb.php';
include 'header1.php';

session_start();
$x= $_SESSION['bid'];
session_write_close();
$abc=$x;

$query="select distinct mname,mid from repinboard natural join media where bid='$x';";
$result=$mysqli->query($query);
$count=0;
$mids = array();
$mname = array();
While($row=$result->fetch_array())
{
	$count=$count+1;
	array_push($mids, $row['mid']);
	array_push($mname,$row['mname']);
}
$midCount = sizeOf($mids);

$query="SELECT bname FROM `board` WHERE `bid`='{$x}'";
$result=$mysqli->query($query);
While($row=$result->fetch_array())
{
	$bname = $row['bname'];
}

echo '<h1>' .$bname. '</h1>';

?>

 
<style>

/* Core CSS */

#box
{
    background: white;
    
    -webkit-box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3); 

    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px; 
}

#box-inner
{
    background: white;
    margin-top: -50px;

    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px; 

    /* transform z-index hack */    
    -moz-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    transform: rotate(0deg);
}

#box:before
{
    content: '';
    position: relative;

    margin-left: 325px;
    top: -10px;

    background: white;
    display: block;
    width: 50px;
    height: 50px;

    -webkit-box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3); 

    -moz-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

/* styles for display purposes. Not necessary */
body
{
    background: #dedede;
}

#box
{
    margin: 20px auto;
    width: 400px;
}

#box-inner
{
    padding: 50px;
    font-size: 25px;
}
body {
	background: url(http://subtlepatterns.com/patterns/scribble_light.png) ;
}
#wrapper {
	width: 90%;
	max-width: 1100px;
	min-width: 800px;
	margin: 50px auto;
}

#columns {
	-webkit-column-count: 3;
	-webkit-column-gap: 10px;
	-webkit-column-fill: auto;
	-moz-column-count: 3;
	-moz-column-gap: 10px;
	-moz-column-fill: auto;
	column-count: 3;
	column-gap: 15px;
	column-fill: auto;
}

.pin {
	display: inline-block;
	background: #FEFEFE;
	border: 2px solid #FAFAFA;
	box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
	margin: 0 2px 15px;
	-webkit-column-break-inside: avoid;
	-moz-column-break-inside: avoid;
	column-break-inside: avoid;
	padding: 15px;
	padding-bottom: 5px;
	background: -webkit-linear-gradient(45deg, #FFF, #F9F9F9);
	opacity: 1;
	
}

.pin img {
	width: 100%;
	border-bottom: 1px solid #ccc;
	padding-bottom: 15px;
	margin-bottom: 5px;
}

.pin p {
	font: 12px/18px Arial, sans-serif;
	color: #333;
	margin: 0;
}

@media (min-width: 960px) {
	#columns {
		-webkit-column-count: 4;
		-moz-column-count: 4;
		column-count: 4;
	}
}

@media (min-width: 1100px) {
	#columns {
		-webkit-column-count: 5;
		-moz-column-count: 5;
		column-count: 5;
	}
}

#columns:hover .pin:not(:hover) {
	opacity: 0.4;
}
</style>
 
</head>
 
<body>

<?php
			echo '<a href="followboard.php?bid='.$abc. '"><input type="button"  value="Follow">';
			echo '<a href="addgroup.php?bid='.$abc. '"><input type="button"  value="Add to Group">';
?>
    <!-- the good stuff -->
<div id="wrapper">
<div id="columns">
	<?php
include 'connectdb.php';

 
for ($x = 0; $x < $midCount; $x = $x + 1)
{ 
			echo '<div class="pin">';
			$str1="$mname[$x]";
			$str2=".jpg";
			$str4="img/";
			$str3 = $str4.$str1.$str2;
		
			echo '<a href="media1.php?mid='.$mids[$x]. '"><img src="' . $str3. '">';
			echo "<p>$mname[$x]</p>";
				
			echo '</div>';
	}
			
			
?>
  </div>
</div>

 
</body>


