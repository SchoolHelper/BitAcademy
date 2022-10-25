<?php

$blokken_beschikbaar = readline("Hoeveel blokken zijn er beschikbaar voor de piramide?");
$rijen = 0;
$blokken_deze_rij = 1;

while ($blokken_beschikbaar >= $blokken_deze_rij) {
    $blokken_beschikbaar = $blokken_beschikbaar - $blokken_deze_rij;
    $rijen++;
    $blokken_deze_rij++; 
}

echo "$rijen";