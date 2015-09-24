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
			for ($x = 0; $x < $fsecretCount; $x++) {
				

				echo '<a href="id2.php?bid='.$fsecret[$x]. '"><input type="button"  value='.$fsname[$x].'></a>';
				echo '<br>';
			} 
			?>
	</div>
    </div>
 
</body>




</body>
</html>