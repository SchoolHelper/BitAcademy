<?php

$bedrag = $argv[1];

const MONEY_UNITS = array(50, 20, 10 , 5, 2, 1);

if (empty($bedrag)) {
    echo "geen wisselgeld.\n";
}

foreach ((MONEY_UNITS) as $waarde) {
    $aantal = floor($bedrag / $waarde);

    if ($aantal > 0) {
        echo "$aantal x $waarde euro \n";
    }
    $bedrag = $bedrag % $waarde;
}
?>