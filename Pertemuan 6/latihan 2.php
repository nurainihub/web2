<?php
$x = ["one", "two", "three"];

foreach ($x as $value) {
    echo $value . PHP_EOL;
}

echo PHP_EOL;

$b = [
    "sayur" => "wortel",
    "daging" => "ayam",
    "utama" => "nasi"
];

$jumlah = count($b);

echo "Jumlah array b = $jumlah" . PHP_EOL;
?>