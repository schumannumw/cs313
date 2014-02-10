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
			<h1>Welcome: you are now logged in</h1>
			<h1>Click here to log out:</h1> <a href="login/logout.php"> LOG OUT </a>
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