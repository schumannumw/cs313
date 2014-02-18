<?php
session_start();
require "../config.php";
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
			<h2>Please select a category from below</h2>
			</div>
		
		   <h2>Category</h2>
	<form action="categories.php" method="post">
     <?php

        $DBServer = 'localhost';
        $DBUser   = 'color';
        $DBPass   = 'c';
        $DBName   = 'coloringpages_db';
        
        $mysqli = new mysqli($DBServer, $DBUser, $DBPass, $DBName);

        if ($mysqli->connect_errno)
        {
          echo "Check your Connection: " . $mysqli->connect_error;

        }
        else
        {
          $query = "SELECT * FROM categories";
       
          $result = $mysqli->query($query);

          echo "<select name='categories'>";
          if ($result->num_rows > 0)
          {
            while ($row = $result->fetch_assoc())
            {
              echo "<option value='". $row["id"] . "'>" . $row["type"] . "</option>";
            }   
          }
          echo "</select>";
        }
     ?>
       <input type="submit" value="Search"/>
     </form>
	 Category:

<?php 
	$value = $_POST["categories"];
    echo $value;
?>
	 			<p>You are now viewing All Pages<p/>

		<?php
		// Get images from a directory
		$myDirectory = opendir("../images/$value");
		while($entryName = readdir($myDirectory)) {
			$dirArray[] = $entryName;
		}
		closedir($myDirectory);
		$indexCount	= count($dirArray);
		?>
		
		<?php
		//1
		if ($value == 1){
		echo "Easter";
		for($index=0; $index < $indexCount; $index++) {
			$extension = substr($dirArray[$index], -3);
			if ($extension == 'jpg'){ // I think by doing a * I can get everything in the folder
				echo '<img src="/coloring/images/1/' . $dirArray[$index] . '" alt="Image"  class="large-images" />';
				// in the future to display the file name do this <span>' . $dirArray[$index] . '</span>
				}	
			}
		}
		
		//2
		if ($value == 2){
		echo "Christmas";
		for($index=0; $index < $indexCount; $index++) {
			$extension = substr($dirArray[$index], -3);
			if ($extension == 'jpg'){ // I think by doing a * I can get everything in the folder
				echo '<img src="/coloring/images/2/' . $dirArray[$index] . '" alt="Image"  class="large-images" />';
				// in the future to display the file name do this <span>' . $dirArray[$index] . '</span>
				}	
			}
		}
		//3
		if ($value == 3){
		echo "Thanksgiving";
		for($index=0; $index < $indexCount; $index++) {
			$extension = substr($dirArray[$index], -3);
			if ($extension == 'jpg'){ // I think by doing a * I can get everything in the folder
				echo '<img src="/coloring/images/3/' . $dirArray[$index] . '" alt="Image"  class="large-images" />';
				// in the future to display the file name do this <span>' . $dirArray[$index] . '</span>
				}	
			}
		}
		//4
		if ($value == 4){
		echo "Easter";
		for($index=0; $index < $indexCount; $index++) {
			$extension = substr($dirArray[$index], -3);
			if ($extension == 'jpg'){ // I think by doing a * I can get everything in the folder
				echo '<img src="/coloring/images/4/' . $dirArray[$index] . '" alt="Image"  class="large-images" />';
				// in the future to display the file name do this <span>' . $dirArray[$index] . '</span>
				}	
			}
		}
		//5
		if ($value == 5){
		echo "Disney";
		for($index=0; $index < $indexCount; $index++) {
			$extension = substr($dirArray[$index], -3);
			if ($extension == 'jpg'){ // I think by doing a * I can get everything in the folder
				echo '<img src="/coloring/images/5/' . $dirArray[$index] . '" alt="Image"  class="large-images" />';
				// in the future to display the file name do this <span>' . $dirArray[$index] . '</span>
				}	
			}
		}
		//6
		if ($value == 6){
		echo "Around The House";
		for($index=0; $index < $indexCount; $index++) {
			$extension = substr($dirArray[$index], -3);
			if ($extension == 'jpg'){ // I think by doing a * I can get everything in the folder
				echo '<img src="/coloring/images/6/' . $dirArray[$index] . '" alt="Image"  class="large-images" />';
				// in the future to display the file name do this <span>' . $dirArray[$index] . '</span>
				}	
			}
		}
		
				//7 upload
		if ($value == 7){
		echo "Upload";
		for($index=0; $index < $indexCount; $index++) {
			$extension = substr($dirArray[$index], -3);
			if ($extension == 'jpg'){ // I think by doing a * I can get everything in the folder
				echo '<img src="/coloring/images/7/' . $dirArray[$index] . '" alt="Image"  class="large-images" />';
				// in the future to display the file name do this <span>' . $dirArray[$index] . '</span>
				}	
			}
		}
		?>

		<footer>
			<div>
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/coloring/modules/footer.php'; ?>
			</div>
		</footer>
	</body>
</html>

