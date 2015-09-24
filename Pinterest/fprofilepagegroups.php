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
			for ($x = 0; $x < $fgnameCount; $x++) {
				
				echo '<a href="fgroupboard.php?gid='.$fgids[$x]. '"><input type="button"  value='.$fgname[$x].'></a>';
				echo '<br>';
				
			
			} 
			?>
			
			
			
			
			
			      </div>
    </div>
 
</body>




</body>
</html>