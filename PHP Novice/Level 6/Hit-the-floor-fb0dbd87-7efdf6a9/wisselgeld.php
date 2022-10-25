<?php

$bedrag = $argv[1];

$wisselgeld = array(10 , 5, 2, 1);

if (empty($getal)) {
    echo "geen wisselgeld.\n";
}

foreach ($wisselgeld as $waarde) {
    $aantal = floor($bedrag / $waarde);

    if ($aantal > 0) {
        echo "$aantal x $waarde euro \n";
    }
    $bedrag = $bedrag % $waarde;
}
?>