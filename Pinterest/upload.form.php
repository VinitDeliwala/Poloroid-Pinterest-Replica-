<?php
include 'header.php';

// filename: upload.form.php

// first let's set some variables

// make a note of the current working directory relative to root.
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

// make a note of the location of the upload handler
$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.processor.php';

// set a max file size for the html upload form
$max_file_size = 30000; // size in bytes

// now echo the html page
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		
		<title>Upload form</title>
	
	</head>
	
	<body>
		
	
	<form id="Upload" action="<?php echo $uploadHandler ?>" enctype="multipart/form-data" method="post">
	<h1>
			Upload form
		</h1>
	
		<fieldset id="inputs">
			 Media Name:<br><input type="name" placeholder="Media Name" name="mname"  /><br>
			 
			 Media Description:<br>	<textarea name="mtag" placeholder="Media Description" rows="10" cols="50"></textarea><br>
			 
  			 Media Type:<br><input type="name" placeholder="type" name="mtype" /><br>
			 
		
				 
		</fieldset>	
		
		
		<p>
			<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>">
		</p>
		
		<p>
			<label for="file">File to upload:</label>
			<input id="file" type="file" name="file">
		</p>
				
		<p>
			<label for="submit">Upload</label>
			<input id="submit" type="submit" name="submit" value="Upload me!">
		</p>
	
	</form>
	
	<form id="Upload" action="upload.processor1.php" enctype="multipart/form-data" method="post">
<h1>
			Upload form via URL
		</h1>
	
		<fieldset id="inputs">
			 Media Name:<br><input type="name" placeholder="Media Name" name="mname"  /><br>
			 
			 Media Description:<br>	<textarea name="mtag" placeholder="Media Description" rows="10" cols="50"></textarea><br>
			 
  			 Media Type:<br><input type="name" placeholder="type" name="mtype" /><br>
			 
			 Media URL:<br><input type="name" placeholder="type" name="url" /><br>
			
				 
		</fieldset>	
		
		
		
		<p>
			<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>">
		</p>
				
		<p>
			<label for="submit">Upload</label>
			<input id="submit" type="submit" name="submit" value="Upload me!">
		</p>
	
	</form>
</body>
</html>
	
	</body>

</html>