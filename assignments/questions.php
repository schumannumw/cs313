<?php
        session_start();
                
?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
		<link rel="stylesheet" href="/css/screen.css" type="text/css" media="screen" />
    </head>

    <body>
		<div id="press">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
		</div>
		
		<div id="main_nav">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php'; ?>
        </div>
<?php
if(isset($_SESSION['views']))
//session_destroy();
header('Location: http://ec2-54-208-212-218.compute-1.amazonaws.com/assignments/alreadyvoted.php');
else
$_SESSION['views']=1;
//echo "Views=". $_SESSION['views'];
?>
<p><a href="http://ec2-54-208-212-218.compute-1.amazonaws.com/assignments/results.php"> Results Page</a></p>
<form action="results.php" method="post">
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email">

    <br>
    <br>
    Of the following what is your favorite color? <br>
    <input type="radio" name="color" value="Blue">Blue<br>
    <input type="radio" name="color" value="Green">Green<br>
    <input type="radio" name="color" value="Purple">Purple<br>
    <input type="radio" name="color" value="Yellow">Yellow<br>
    <br>
	Of the following what is your favorite thing to draw? <br>
    <input type="radio" name="draw" value="Holiday Stuff">Holiday Stuff<br>
    <input type="radio" name="draw" value="Animals">Animals<br>
    <input type="radio" name="draw" value="People">People<br>
    <input type="radio" name="draw" value="Buildings">Buildings<br>
    <br>
	Of the following What are your top holidays?
    <br>
    <input type="checkbox" name="holidays[]" value="Christmas">Christmas<br>
    <input type="checkbox" name="holidays[]" value="Easter">Easter<br>
    <input type="checkbox" name="holidays[]" value="Thanksgiving">Thanksgiving<br>
    <input type="checkbox" name="holidays[]" value="Halloween">Halloween<br>
    <br>
	What would you like to see change about this site?<br>
    <input type="radio" name="site" value="More Coloring Pictures">More Coloring Pictures<br>
    <input type="radio" name="site" value="Different Theme">Different Theme<br>
    <input type="radio" name="site" value="Upload Section">Upload Section<br>
    <input type="radio" name="site" value="Joke Of the Day">Joke Of the Day<br>
    <br>
    Please leave any other comments here:<br>
    <textarea rows="10" cols="60" name="comments"></textarea>
    <br>
    <input type="submit" value="SUBMIT"/>
    </form>
<br/><br/><br/>
       <footer id="page_footer">
			<div>
				<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
			</div>
        </footer>
    </body>



    </html>