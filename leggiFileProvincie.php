<?php
$lines = file('listacomuni.csv');
$province = [];
foreach ($lines as $line) {
    $parti = explode(";", $line);
    $province[] = trim($parti[1]);
}

echo implode("\n", array_unique($province)); 
?>
