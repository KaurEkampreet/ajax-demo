<?php

//showphrase.php

$val = $_POST['num'];
$name = $_POST['name'];

$adjs = array("funny", "smart", "nerdy", "awesome");
$names = array("amu", "amaya", "nishi", "Eku");

//grab a random name and adjective
$name = $names[rand(0, count($names)-1)];
$adj = $adjs[rand(0, count($adjs)-1)];

//grab a random name and adjective num times
for($i=0; $i<$val; $i++);
//$name = $names[rand(0, count($names)-1)];
$adj = $adjs[rand(0, count($names)-1)];

//display a message
echo"<h3>$name is $adj</h3>";

//echo "Hello world!";
