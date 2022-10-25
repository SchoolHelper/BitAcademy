<?php

$mystring = $argv[1];

$parts = explode(" ", $mystring);

$total = 0;

foreach ($parts as $part) {
    $value = substr($part, 0, -1);
    $type = substr($part, -1);

    switch ($type) {
        case "d": 
            $total += $value * 86400; 
            break;
        case "u": 
            $total += $value * 3600; 
            break;
        case "m": 
            $total += $value * 60; 
            break;
        case "s": 
            $total += $value; 
            break;
    }
}

echo $total .  " seconden";
?>