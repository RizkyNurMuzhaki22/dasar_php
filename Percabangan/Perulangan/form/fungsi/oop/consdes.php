<?php
//class perkenalan
class perkenalan{
    //property
    var $nama;
    var $warna;
    
    //method construct di jalankan pertama kali
    function __construct(){
        echo "Assalamualaikum wr.wb <br>";
    }
    
    //method destruct di jalankan terakhir
    function __destruct(){
        echo "Hatur Nuhun, Wasalamualaikum wr.wb <br>";
    }
    
    //method perkenalan
    function tampilkan_nama(){
        return "Nama saya Rizky Nur Muzhaki <br>";
    }
    
}
//instansiasi class perkenalan
$perkenalan = new perkenalan();
 
//memanggil method tampilkan_nama dari class perkenalan
echo $perkenalan->tampilkan_nama();
?>