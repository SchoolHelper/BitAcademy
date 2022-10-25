<?php

$hoeveel = readline('Hoeveel vrienden zal ik vragen om hun droom? ');
if (is_numeric($hoeveel)) {
    for ($x = 0; $x < $hoeveel; $x++) {
        $namen = readline('Wat is jouw naam?: ');

        $vrienden[$namen] = [];
        
        $aantal = readline('Hoeveel dromen ga jij opgeven? '); 
        
        if (is_numeric($aantal)) {
            for ($i = 0; $i < $aantal; $i++) {
                $droom = readline('Wat is jouw droom?: ');
                $vrienden[$namen][] = $droom;
            }
        } else {
            exit($aantal . 'is geen getal, probeer het opnieuw');
        }
    }        
} else {
    exit($hoeveel . 'is geen getal, probeer het opnieuw');
}
foreach ($vrienden as $vriend => $dromen) {
    foreach ($dromen as $droom) {
        echo $vriend . " Heeft dit als droom: " . $droom . PHP_EOL;
    }
}