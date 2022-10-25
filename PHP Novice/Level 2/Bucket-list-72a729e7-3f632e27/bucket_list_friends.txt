<?php

$arr = array();
echo "Hoeveel vrienden willen een droom toevoegen?" . PHP_EOL;
$input = readline();
if (is_numeric($input) && $input > 0) {
    for ($i = 0; $i < ($input); $i++) {
        echo "Hoe heet je?" . PHP_EOL;
        $name = readline();
        echo "Wat is je droom?" . PHP_EOL;
        $dream = readline();
        $arr[$name] = $dream;
    }
    echo "Op jouw bucket list staat:" . PHP_EOL;
    foreach ($arr as $name => $dream) {
        echo "> De droom van $name is: $dream" . PHP_EOL;
    }
} else {
    echo "is not a number $input ?" . PHP_EOL;
}
?>