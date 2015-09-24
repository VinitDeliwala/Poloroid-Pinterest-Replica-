<?php
include('friendprofilepage.php');

?>


<link rel="stylesheet" type="text/css" href="profileboard.css">
 
</head>
 
<body>
 
    <!-- the good stuff -->
    <div id="box">
        <div id="box-inner">
		<?php 
			for ($x = 0; $x < $ffollowerCount; $x++) {
				
				$query="SELECT uname FROM `user` WHERE `uid`='{$ffollower[$x]}'";
				$result=$mysqli->query($query);
				While($row=$result->fetch_array())
				{
					$fname = $row['uname'];
				}

				echo '<a href="id.php?fid='.$ffollower[$x]. '"><input type="button"  value='.$fname.'></a>';
				echo '<br>';
			} 
			?>
        </div>
    </div>
 
</body>




</html>