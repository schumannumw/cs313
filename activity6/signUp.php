<?php
session_start();
if(isset($_SESSION['username'])){ 
   header("location: home.php"); 
}  
$host="localhost"; // Host 
$username="root"; // Database username 
$password="n"; // Mysql password 
$db="signIn"; // Database name 

$con = mysqli_connect($host,$username,$password,$db) or die("Can not connect to Server.");
//Did user press submit?
if(isset($_POST['submit']))
{
// Form info
$user = $_POST['username'];
$password = $_POST['password'];
$checkPassword = $_POST['password2'];
if ($password!=$checkPassword){
echo 'password error';
}
else{
$pass = hash("sha256", $password);

$add = mysqli_query($con,"INSERT INTO user (username, password) VALUES ('$user' , '$pass') ") or die("Can't insert new data. ");
	echo "Submission successful: <a href='signIn.php'>Click here</a> to log in.."; 
	}
}
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<title>Activity 6</title>
<meta charset="UTF-8">

</head>

	<body>
<form name="register" method="post" action="signUp.php">
<input name="username" type="text" id="newuser">Username <br>
<input name="password" type="password" id="newpass">Password<br>
<input name="password2" type="password" id="newpass">Retype Password<br>
<input type="submit" name="submit" value="Sign Up"><br>
</form>	

	</body>
</html>