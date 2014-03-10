<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
		<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" />
    </head>
	
    <body>
		<div id="press">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
		</div>
		
		<div id="main_nav">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php'; ?>
        </div>
		
		<div id="content">
			<h2>Welcome to my home page</h2>
			<p>News Feeds: My Latest Assignment</p>
			 <a href="http://ec2-54-208-212-218.compute-1.amazonaws.com:8080/helloWorld/hellowServlet" title="Site"><img src="assignments/servlet.jpg" alt="3" class="large-images"/></a>
			 	 <a href="coloring/index.php" title="Site"><img src="assignments/finalcoloring.jpg" alt="3" class="large-images"/></a>
		</div>
<br/><br/><br/>
       <footer id="page_footer">
			<div>
				<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
			</div>
        </footer>
	</body>
</html>