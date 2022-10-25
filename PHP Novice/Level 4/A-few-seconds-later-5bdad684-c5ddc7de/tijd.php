<?php

$mystring = $argv[1];
$findme   = 's';
$pos = strpos($mystring, $findme);

if ($pos === false) {
    echo "geen tijd gevonden";
} else {
    echo (int)"$mystring";
    echo " seconden";
}
?>