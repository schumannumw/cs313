<?php
session_start();
if(isset($_SESSION['username'])){ 
echo 'Welcome: ' . $_SESSION['username'];
}  
else {
   header("location: signIn.php"); 
}
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<title>Activity 6</title>
<meta charset="UTF-8">

</head>

	<body>
			

	</body>
</html>