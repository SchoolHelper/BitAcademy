<?php

echo"Van welk getal wi je de faculteit weten?\n";
$num = readline("");
$factorial = 1;

for ($x = $num; $x >= 1; $x--) {
    $factorial = $factorial * $x;
}

echo "The factorial of $num is $factorial";
?>