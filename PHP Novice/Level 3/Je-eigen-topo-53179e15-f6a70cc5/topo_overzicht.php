<?php

$arr = array();
echo "Hoeveel landen ga je toevoegen?:" . PHP_EOL;
$input = readline();
if (is_numeric($input)) {
    for ($i = 0; $i < ($input); $i++) {
        echo "Welke Land wil je toevoegen?" . PHP_EOL;
        $name = readline();
        echo "Wat is de hoofdstad van $name?" . PHP_EOL;
        $dream = readline();
        $arr[$name] = $dream;
    }
    echo "De volgende landen en steden zitten in de database:" . PHP_EOL;
    foreach ($arr as $name => $dream) {
        echo "> $name $dream" . PHP_EOL;
    }
} else {
    echo "$input ?" . PHP_EOL;
}
?>