<?php
include('profilepage.php');
?>


<link rel="stylesheet" type="text/css" href="profileboard.css">
 
</head>
 
<body>
 
    <!-- the good stuff -->
    <div id="box">
        <div id="box-inner">
			<?php 
			for ($x = 0; $x < $gnameCount; $x++) {
				
				echo '<a href="groupboard.php?gid='.$gids[$x]. '"><input type="button"  value='.$gname[$x].'></a>';
				echo '<br>';
				
			
			} 
			?>
			<a href='creategroup.php'><input type="button"  value='Create Group'></a>
		
			
			
			
			
			      </div>
    </div>
 
</body>




</body>
</html>