<?php
// Sebuah Class
class kucing{

// Property/Attribut
var $ras = "Persia";
var $warna = "Abu-abu";

//Method / Function
function ciri(){
        echo "Jenis Kucing Adalah : ".$this-> ras;// Fungsi $this adalah untuk mengambil Property
    }
    function ciri2(){
        echo "Warna Kucing Adalah : ".$this-> warna;
    }
}

//Object
//Instansiasi
$cetak = new kucing();

//Cetak
echo $cetak -> ciri();
echo "<br>";
echo $cetak -> ciri2();
?>