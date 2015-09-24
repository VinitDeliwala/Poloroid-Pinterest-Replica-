<?php
include('profilepage.php');
?>


<style>
<link rel="stylesheet" type="text/css" href="profileboard.css">
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

    margin-left: 175px;
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

</style>
 
</head>
 
<body>
 
    <!-- the good stuff -->
    <div id="box">
        <div id="box-inner">
		<?php 
			for ($x = 0; $x < $followerCount; $x++) {
				
				$query="SELECT uname FROM `user` WHERE `uid`='{$follower[$x]}'";
				$result=$mysqli->query($query);
				While($row=$result->fetch_array())
				{
					$name = $row['uname'];
				}
				echo '<a href="id.php?fid='.$follower[$x]. '"><input type="button"  value='.$name.'></a><br>';
				
			} 
			?>
        </div>
    </div>
 
</body>




</html>