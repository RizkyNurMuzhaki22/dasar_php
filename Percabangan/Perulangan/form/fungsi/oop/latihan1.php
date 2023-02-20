<?php
//Nama Class
class bangundatar{

//Property
var $luaspersegi = 0;

//method / function
function persegi($sisi){
    $this -> luaspersegi = $sisi * $sisi;

    echo "Hasilnya : ".$this -> luaspersegi;
}

}

//Object
//Intansiasi
$cetak = new bangundatar();// Mengambil nama class

//Cetak
echo $cetak -> persegi(5);// Mengambil nama function Propertynya
?>