<?php
$phi = 22 / 7;
$r = 20;
$t = 10;
$luasTabung = ($phi * $r * $r * $t);

function displayData() {
    global $phi, $r, $t;
    echo "CALCULATOR TABUNG <br>";
    echo "<br>";
    echo "phi: $phi<br>";
    echo "r: $r<br>";
    echo "t: $t<br>";
}

function luasTabung() {
    global $phi, $r, $t, $luasTabung;
    echo "Luas Tabung:" . number_format($luasTabung, 2). "<br>";
}

function kondisi() {
    global $luasTabung;
    if($luasTabung > 100) {
        echo "Luas tabung lebih dari 100 <br>";
    }
    
    else {
        echo "Luas tabung kurang dari 100";
    }
}

displayData();
luasTabung();
?>
