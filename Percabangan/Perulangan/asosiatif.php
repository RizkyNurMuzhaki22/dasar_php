<?php

// $artikel = [
        //    "judul" => "Belajar Pemrograman PHP",
        //    "penulis" => "Petani Kode"
// ];

// echo "Judul : ".$artikel["judul"];

// "Judul : " = Ini adalah String
// [judul]= Ini adalah keywoard untuk memanggil value

$identitas = [
            "nama" => "Rizky Nur Muzhaki",
            "kelas" => "XI-RPL-1",
            "jurusan" => "Rekayasa Perangkat Lunak",
            "tempat" => "Cilacap, 22-Desember-2004"
];
echo "Nama : ".$identitas["nama"]."<br>";
echo "Kelas : ".$identitas["kelas"]."<br>";
echo "Jurusan : ".$identitas["jurusan"]."<br>";
echo "Tempat Tanggal Lahir : ".$identitas["tempat"];
?>