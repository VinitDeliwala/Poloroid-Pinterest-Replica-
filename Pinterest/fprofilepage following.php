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
			for ($x = 0; $x < $ffollowingCount; $x++) {
				
				$query="SELECT uname FROM `user` WHERE `uid`='{$ffollowing[$x]}'";
				$result=$mysqli->query($query);
				While($row=$result->fetch_array())
				{
					$fname = $row['uname'];
				}

				echo '<a href="id.php?fid='.$ffollowing[$x]. '"><input type="button"  value='.$fname.'></a>';
				echo '<br>';
				
			} 
			?>
        </div>
    </div>
 
</body>




</html>