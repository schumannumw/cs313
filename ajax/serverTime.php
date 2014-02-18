<?php 
// print_r($date);   using this will show whats in the array

$input = $_GET["input"];
$date = getDate();

$hours = $date["hours"];
$minutes = $date["minutes"];
$seconds = $date["seconds"];
//echo $date;
//echo "$hours:$minutes:$seconds";
echo "The user input was: $input";
?>