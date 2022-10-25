<?php

$input = $argv[1];

if (empty($input)) {
    echo "geen wisselgeld\n";
}

$input = round($input += 0.02, 2, PHP_ROUND_HALF_UP);

$data = array(50,20,10,5,2,1);
const DEFINE = array(50,20,10,5);

$geld = intval($input);
$cent = $input - $geld;
$cent = intval(round($cent * 100));

foreach ($data as $value) {
    $wissel = floor($input / $value);
    if ($wissel >= 1) {
        $input = $input - ($value * $wissel);

        echo $wissel . " x " . $value . " euro" . PHP_EOL;
    }
}
foreach (DEFINE as $value) {
    $aantal = floor($cent / $value);

    if ($aantal >= 1) {
        $cent = $cent - ($value * $aantal);


        echo $aantal . " x " . $value . " cent" . PHP_EOL;
    }
}
?>