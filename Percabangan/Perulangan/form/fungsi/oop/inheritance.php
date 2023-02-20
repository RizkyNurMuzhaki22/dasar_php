<?php
//Class Induk
// class kendaraan{

// }
//Class Anak/Turunan
// class Motor extends kendaraan{
    // function Menyala(){
        // echo "Motor Bisa Jalan";
    // }
// }
//Object / Instansiasi
// $cetak = new Motor;
// Cetak
// echo $cetak->Menyala();
                                             //ENKAPSULASI

                                   //Public=Bisa diakses diluar dan didalam class
                                   //Private=Bisa diakses didalam class
                                   //Protected=Bisa diakses didalam class
class manusia{
    private $nama = "Rizky";
    private function datadiri(){
        echo "Nama : ".$this->nama;
    }
    public function tampil(){
        echo $this->datadiri();
    }
}
$cetak = new manusia;

echo $cetak->tampil();
//NOTE: Apabila privatenya ada 2 maka harus membuat public function baru
?>