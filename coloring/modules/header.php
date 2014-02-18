<?php //Check to see if the user is logged in. 
if(isset($_SESSION['username'])){ 
	echo '<a href="login/logout.php">Log Out </a>'; 
}
else {
	echo '<a href="/coloring/login/signup.php">Create Account</a><br />';
	echo '<a href="/coloring/login/login.php">Login</a><br />';
}  
?>