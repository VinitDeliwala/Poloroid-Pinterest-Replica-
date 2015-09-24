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
			for ($x = 0; $x < $secretCount; $x++) {
				
				echo '<a href="id1.php?bid='.$secret[$x]. '"><input type="button"  value='.$sname[$x].'></a>';
				echo '<br>';
			
			} 
			?>
	</div>
    </div>
 
</body>




</body>
</html>