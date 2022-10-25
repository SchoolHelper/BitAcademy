<?php

$sum = 0;

$producten = array("Citizen of Glass kost:" => 4.5, "Night Kost:" => 9, 
"New Eyes kost:" => 5, "Strange Trails kost:" => 10);

echo "Het album overzicht:"  . PHP_EOL;

foreach ($producten as $key => $value) {
    $sum += $value;
    echo $key . " €" . $value . "\n";
}

echo "het totaal bedrag: €" . $sum . "\n";
echo "gemiddelde: €" . $sum / count($producten) . "\n";

?>