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
			for ($x = 0; $x < $ffriendCount; $x++) {
				
				$query="SELECT uname FROM `user` WHERE `uid`='{$ffname[$x]}'";
				$result=$mysqli->query($query);
				While($row=$result->fetch_array())
				{
					$name = $row['uname'];
				}

				echo '<a href="id.php?fid='.$ffname[$x]. '"><input type="button"  value='.$name.'></a>';
				echo '<br>';
			} 
			?>
         </div>
    </div>

       
 
</body>




</html>