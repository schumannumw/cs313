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
<br/><br/><br/><br/><br/>
<h3> Your Results Page</h3>

<b>Name:</b> <?php echo $_POST["name"]; ?><br>
<b>E-mail:</b> <a href="mailto:<?php echo $_POST["email"]; ?>"><?php echo $_POST["email"]; ?></a><br>
<b>Favorite Color:</b> <?php echo $_POST["color"]; ?><br>
<b>Favorite thing to draw:</b> <?php echo $_POST["draw"]; ?><br>
<b>Your top holidays:</b> <br>
<?php $holidays = $_POST["holidays"];
if(!empty($holidays))
{
   $num = count($holidays);
   for ($i=0; $i < $num; $i++)
      echo($holidays[$i] . "<br/>");
}
?>
<b>Change about this site:</b> <?php echo $_POST["site"]; ?><br>
<b>Your comments:</b><br/>
<?PHP echo htmlspecialchars($_POST['comments']); ?>
<br/><br/>
<b>Thank you for your time.</b>
       <footer id="page_footer">
			<div>
				<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
			</div>
        </footer>
</body>


</html>