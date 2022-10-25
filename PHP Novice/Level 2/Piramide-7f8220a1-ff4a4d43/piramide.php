<?php

echo "hoeveel stapels wil je?\n";
$string1 = "*";
$a = readline("");

for ($x = 1; $x <= $a; $x++) {
    echo $string1;

    $string1 = $string1 . "*";
    echo PHP_EOL;
}
