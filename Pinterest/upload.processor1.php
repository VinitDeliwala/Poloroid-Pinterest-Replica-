<?php  

include 'connectdb.php';
// filename: upload.processor.php

// first let's set some variables

// make a note of the current working directory, relative to root.
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

// make a note of the directory that will recieve the uploaded files
$uploadsDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . 'img/';

// make a note of the location of the upload form in case we need it
$uploadForm = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.form.php';

// make a note of the location of the success page
$uploadSuccess = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.success.php';

// name of the fieldname used for the file in the HTML form
$fieldname = 'file';

$b = $_POST['mname'];
$d = $_POST['mtag'];
$u = $_POST['mtype'];
$s = $_POST['url'];       
// Now let's deal with the upload

// possible PHP upload errors
$errors = array(1 => 'php.ini max file size exceeded', 
                2 => 'html form max file size exceeded', 
                3 => 'file upload was only partial', 
                4 => 'no file was attached');

// check the upload form was actually submitted else print form
	
// check that the file we are working on really was an HTTP upload
	
// validation... since this is an image upload script we 
// should run a check to make sure the upload is an image
	
// make a unique filename for the uploaded file and check it is 
// not taken... if it is keep trying until we find a vacant one
$uploadsDirectory='/wamp/www/Pinterest/img/';
$uploadFilename=$uploadsDirectory.$b.".jpg";

$ch = curl_init($s);
$fp = fopen($uploadFilename, 'wb');
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);


// now let's move the file to its final and allocate it with the new filename



$stmt1 = $mysqli->prepare("INSERT INTO `media` (`mid`, `mname`, `mtag`, `mtype`) VALUES (?,?,?,?);");
				$mid= NULL;
				$stmt1->bind_param('ssss', $mid, $b, $d, $u);
				/* execute prepared statement */
				$stmt1->execute();				
				/* close statement and connection */
				$stmt1->close();
				
				$query="SELECT mid FROM `media` WHERE `mname`='{$b}'";
				$result=$mysqli->query($query);
				While($row=$result->fetch_array())
				{
					$name = $row['mid'];
				}
				session_start();
				$bid=$_SESSION['bid'];
				$mid = $name;
						
				$stmt = $mysqli->prepare("INSERT INTO `pinterest1`.`repinboard` (`bid`, `mid`) VALUES (?,?);");
				$stmt->bind_param('ss', $bid, $mid);
				$stmt->execute();				
				/* close statement and connection */
				$stmt->close();

	
// If you got this far, everything has worked and the file has been successfully saved.
// We are now going to redirect the client to the success page.
header('Location: ' . $uploadSuccess);


// make an error handler which will be used if the upload fails
function error($error, $location, $seconds = 5)
{
	header("Refresh: $seconds; URL=\"$location\"");
	echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"'."\n".
	'"http://www.w3.org/TR/html4/strict.dtd">'."\n\n".
	'<html lang="en">'."\n".
	'	<head>'."\n".
	'		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">'."\n\n".
	'		<link rel="stylesheet" type="text/css" href="stylesheet.css">'."\n\n".
	'	<title>Upload error</title>'."\n\n".
	'	</head>'."\n\n".
	'	<body>'."\n\n".
	'	<div id="Upload">'."\n\n".
	'		<h1>Upload failure</h1>'."\n\n".
	'		<p>An error has occured: '."\n\n".
	'		<span class="red">' . $error . '...</span>'."\n\n".
	'	 	The upload form is reloading</p>'."\n\n".
	'	 </div>'."\n\n".
	'</html>';
	exit;
} // end error handler

?>