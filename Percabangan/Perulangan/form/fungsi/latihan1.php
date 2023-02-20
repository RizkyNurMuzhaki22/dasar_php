<?php

function luasPersegi($sisi){
    $luas = $sisi * $sisi;

    echo "Sisi Persegi : ".$sisi;
    echo "<br>";
    echo "Luas Persegi : ".$luas;
}

echo "<h4>Menghitung Luas Persegi</h4>";
luasPersegi(10);
echo "<hr>";

function luasPersegiPanjang($panjang,$lebar){
    $luaspersegipanjang = $panjang * $lebar;

    echo "Panjang Persegi Panjang : ".$panjang;
    echo "<br>";
    echo "Lebar Persegi Panjang : ".$lebar;
    echo "<br>";
    echo "Luas Persegi Panjang : ".$luaspersegipanjang;
}

echo "<h4>Menghitung Luas Persegi Panjang</h4>";
luasPersegiPanjang(60,200);
echo "<hr>";

function luasSegitiga($luasAlas,$tinggi){
    $luassegitiga = 1.2 * ($luasAlas * $tinggi);

    echo "Luas Alas Segitiga : ".$luasAlas;
    echo "<br>";
    echo "Tinggi Segitiga : ".$tinggi;
    echo "<br>";
    echo "Luas Segitiga : ".$luassegitiga;
}

echo "<h4>Menghitung Luas Segitiga</h4>";
luasSegitiga(14,5);
echo "<hr>";

function luasLingkaran($phi,$jari){
    $luaslingkaran = $phi * $jari;

    echo "Phi : ".$phi;
    echo "<br>";
    echo "Jari-jari Lingkaran : ".$jari;
    echo "<br>";
    echo "Luas Segitiga : ".$luaslingkaran;
}

echo "<h4>Menghitung Luas Lingkaran</h4>";
luasLingkaran(3.14,196);
echo "<hr>";
?>