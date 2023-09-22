<?php
$con = new mysqli("localhost","root","","jakos");

$q = "SELECT * FROM bedzie";

 
if($wynik=$con->query($q))
while($row=$wynik->fetch_array())
echo $row["nazwa"] . ";" . $row["cena"] . ";" . $row["opis"] . "</br>";
else
echo $con->errno . " " . $con->error;
?>

