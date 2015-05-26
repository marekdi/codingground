<?php

function pocitajNahodneCisla() {

	$jeden = 0;
	$dva   = 0;
	$tri   = 0;

	for ($i = 0; $i < 10; $i++) {
		$cislo = rand(1, 3);

		echo $i . ") ";

		if ($cislo == 1) {
		   echo "jeden\n";
		   $jeden++;
		} elseif ($cislo == 2) {
		   echo "dva\n";
		   $dva++;
		} else {
		   echo "tri\n";
		   $tri++;
		}
	}

        return [$jeden, $dva, $tri];
}


$a = 0;
$b = 0;
$c = 0;

$pokus = 0;

while ($a != 10 && $b != 10 && $c != 10) {

	list($a, $b, $c) = pocitajNahodneCisla();

	echo "_________________________\n";
	echo "jeden: " . $a . "\n";
	echo "dva: " . $b . "\n";
	echo "tri: " . $c . "\n";
	echo "\n\n";

	$pokus++;

}
echo "bolo to na $pokus. pokus\n";


?>