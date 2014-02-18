<?php
session_start();
require "../config.php";
if(!isset($_SESSION['username'])){ 
   header("location: ../login/login.php"); 
}  
else {
// make a note of the current working directory relative to root.
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

// make a note of the location of the upload handler
$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'uploadprocessor.php';

// set a max file size for the html upload form
$max_file_size = 2097152; // 2 MB
}
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<link rel="stylesheet" href="/coloring/css/cscreen.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>Upload form</title>
</head>

	<body>
			<div id="press">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/coloring/modules/header.php'; ?>
			</div>

			<div id="main_nav">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/coloring/modules/navigation.php'; ?>
			</div>

			<div id="content">
			
	<form id="Upload" action="<?php echo $uploadHandler ?>" enctype="multipart/form-data" method="post">
		<h1>
			Upload a coloring picture
		</h1>
			<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>">
			<label for="file">Image File:</label>
			<input id="file" type="file" name="file">
			<label for="submit">Submit: </label>
			<input id="submit" type="submit" name="submit" value="Upload">
	</form>
	
			</div>

		<footer>
			<div>
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/coloring/modules/footer.php'; ?>
			</div>
		</footer>
	</body>
</html>