<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<title>Kids Coloring Pages</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="/coloring/css/cscreen.css" type="text/css" media="screen" />
</head>

	<body>
			<div id="press">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/coloring/modules/header.php'; ?>
			</div>

			<div id="main_nav">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/coloring/modules/navigation.php'; ?>
			</div>

			<div id="content">
			<h2>Welcome to coloring pages</h2>
			<h1>Login:</h1>
			<form name="form1" method="post" action="/coloring/login/checklogin.php">
<input name="myusername" type="text" id="myusername">Username <br>
<input name="mypassword" type="password" id="mypassword">Password<br>
<input type="submit" name="Submit" value="Login"><br>
</form>
<p>To test out my login please use this sample data:<br>
Username: <b>testuser</b><br>
Password: <b>testpa</b><br>
			</div>
			<p>Top coloring pages this week<p/>
<img src="/coloring/images/animals_1.jpg" alt="" class="large-images">
<img src="/coloring/images/disney_1.jpg" alt="" class="large-images">
<img src="/coloring/images/easter_1.jpg" alt="" class="large-images">
		<footer>
			<div>
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/coloring/modules/footer.php'; ?>
			</div>
		</footer>
	</body>
</html>