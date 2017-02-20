<?php

// Maak een Array met 3 namen van medeleerlingen.

$names = array("Axel", "Sander", "Kenzo");

// Itereer er over met een for-loop. Print ze af in een HTML ongenummerde lijst.

for ($x = 0; $x <= count($names); $x++) {
	echo $names[$x];
	echo "<br>";
}

// Itereer er over met een foreach-loop. Print ze af in HTML genummerde lijst.

foreach ($names as $name) {
	echo $name;
	echo "<br>";
}

echo "<br>";

$naam = "Willy";

// Itereer met een for-loop over de variable $naam alsof het een array was.


for ($x = 0; $x <= count($naam); $x++) {
	echo $naam[$x];
	echo "<br>";
}

echo "<br>";

for ($x = 0; $x <= strlen($naam); $x++) {
	echo $naam[$x];
	echo "<br>";
}

?>
