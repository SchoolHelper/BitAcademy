<?php

echo "hoeveel stapels wil je?\n";
$a = readline("");
$x1 = "*";

for ($x = 1; $x <= $a; $x++) {
    for ($z = 1; $z <= $x; $z++) {
        echo "*";
    }
    echo "" . "\n";
}
dsadsa