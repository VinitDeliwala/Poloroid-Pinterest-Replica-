<?php
include('profilepage.php');
?>

<style>
<link rel="stylesheet" type="text/css" href="profileboard.css">
</style>
 
</head>
 
<body>
 
    <!-- the good stuff -->
    <div id="box">
        <div id="box-inner">
			<?php 
			for ($x = 0; $x < $bnameCount; $x++) {
				
				echo '<a href="id1.php?bid='.$bids[$x]. '"><input type="button"  value='.$bname[$x]. '></a>';
				echo '<br>';
				
			
			} 
			?>
			<a href='createboard.html'><input type="button"  value='CreateBoard'></a>
		
			
			<p> Follow Board</p>
			<?php 
			for ($x = 0; $x < $fbnameCount; $x++) {
				
				echo '<a href="id2.php?bid='.$fbids[$x]. '"><input type="button"  value='.$fbname[$x].'></a>';
				echo '<br>';
				
			
			} 
			?>
			      </div>
    </div>
 
</body>




</body>
</html>