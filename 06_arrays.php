<?php

// Maak een Array met 3 namen van medeleerlingen.

$names = array("Axel", "Sander", "Kenzo");

// Itereer er over met een for-loop. Print ze af in een HTML ongenummerde lijst.

echo "<ul>";
for ($x = 0; $x < count($names); $x++) {
	echo "<li>$names[$x]</li>";
}
echo "</ul>";

// Itereer er over met een foreach-loop. Print ze af in HTML genummerde lijst.

echo "<ol>";
foreach ($names as $name) {
	echo "<li>$name</li>";
	echo "<br>";
}
echo "</ol>";

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
