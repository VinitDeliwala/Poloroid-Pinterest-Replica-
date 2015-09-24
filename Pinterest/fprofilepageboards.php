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
			for ($x = 0; $x < $fbnameCount; $x++) {
				
				echo '<a href="id2.php?bid='.$fbids[$x]. '"><input type="button"  value='.$fbname[$x].'></a>';
				echo '<br>';
				
			} 
			?>
						<p> Follow Board</p>
			<?php 
			for ($x = 0; $x < $ffbnameCount; $x++) {
				
				echo '<a href="id2.php?bid='.$ffbids[$x]. '"><input type="button"  value='.$ffbname[$x].'></a>';
				echo '<br>';
				
			
			} 
			?>

        </div>
    </div>
 
</body>




</body>
</html>