<?php

$namen = readline("Noem de namen op:");

$name_array = explode(" ", $namen);

echo "In de klas zitten:" . PHP_EOL;

foreach ($name_array as $naam) {
    echo $naam . "\n";
}
?>