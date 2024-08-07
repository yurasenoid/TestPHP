<?php
$phi = 22 / 7;
$r = 7;
$t = 5;
$luasTabung = ($phi * $r * $r * $t);

function displayData() {
    global $phi, $r, $t;
    echo "CALCULATOR TABUNG <br>";
    echo "<br>";
    echo "phi: 22/7 <br>";
    echo "r: $r<br>";
    echo "t: $t<br>";
}

function luasTabung() {
    global $luasTabung;
    $decimal = $luasTabung - floor($luasTabung);
    if ($decimal == 0) {
        echo "Luas Tabung: " . floor($luasTabung) . "<br>";
    } else {
        echo "Luas Tabung: " . number_format($luasTabung, 1) . "<br>";
    }
}

displayData();
luasTabung();
?>
