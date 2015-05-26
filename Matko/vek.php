<?php

$vek = 11;

$meno = "matko";

if ($vek < 6) {
   echo $meno . " je krpec.";
} elseif ($vek < 20) {
   echo $meno . " chodi do skoly.";
} elseif ($vek < 60) {
   echo $meno . " chodi do roboty.";
} else {
   echo $meno . " uz nechodi do roboty.";
}

echo "\n\n";

?>