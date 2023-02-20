<?php
// Sebuah Class
class kucing{

// Property/Attribut
var $ras;
var $warna;

//Method / Function
function makan($makanan){
        echo "Kucing Suka Makan : ".$makanan;
    }
    function minum(){
        echo "Kucing Suka Minum Susu";
    }
}

//Object
//Instansiasi
$cetak = new kucing();

//Cetak
echo $cetak -> makan("Ikan Asin");
echo "<br>";
echo $cetak -> minum();
?>