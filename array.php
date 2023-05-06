<form action="Array.php" method="GET"></form>
<input type ="text" name="xname">
<input type="submit">
<?php 
$xname = $_GET["xname"];

$family = [
    "designer" => "nour",
    "prgorammer" => "majed",
    "Gamer" => "anas"];
    
echo $family[$xname];

?>