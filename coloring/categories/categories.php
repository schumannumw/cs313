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
   echo $_POST["categories"];
?>
	 			<p>You are now viewing All Pages<p/>

		<?php
		// Get images from a directory
		$myDirectory = opendir("../images");
		while($entryName = readdir($myDirectory)) {
			$dirArray[] = $entryName;
		}
		closedir($myDirectory);
		$indexCount	= count($dirArray);
		?>
		
		<?php
		for($index=0; $index < $indexCount; $index++) {
			$extension = substr($dirArray[$index], -3);
			if ($extension == 'jpg'){ // I think by doing a * I can get everything in the folder
				echo '<img src="/coloring/images/' . $dirArray[$index] . '" alt="Image"  class="large-images" />';
				// in the future to display the file name do this <span>' . $dirArray[$index] . '</span>
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

