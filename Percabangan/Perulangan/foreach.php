<?php

echo "<center><h1>BESTIE KELAS XI-RPL-1</h1></center>";
$bestie = [
             [
                "nama" => "Rizky Nur Muzhaki",                
                "tanggal" => "22-Desember-2004",                
                "kelas" => "XI-RPL-1",                
                "hobi" => ["Mengaji","Membaca"],                
                "cita" => "Guru Agama"          

             ],
             [
                "nama" => "Sandy Saputra",                
                "tanggal" => "05-September-2006",                
                "kelas" => "XI-RPL-1",                
                "hobi" => ["Mobile Legend","Membaca Manga"],                
                "cita" => "Programmer Handal"          

             ],
             [
                "nama" => "Muharafi Dalilah",                
                "tanggal" => "02-Februari-2006",                
                "kelas" => "XI-RPL-1",                
                "hobi" => ["Olahraga","Ngoding"],                
                "cita" => "Atlit"          

             ],
             [
                "nama" => "Alvin Rahmat Maulana",                
                "tanggal" => "09-April-2006",                
                "kelas" => "XI-RPL-1",                
                "hobi" => ["Main Gaple","Main slot"],                
                "cita" => "Bandar"          

             ],
             [
                "nama" => "Azriel Rabbani Shiddiq",                
                "tanggal" => "12-Desember-2005",                
                "kelas" => "XI-RPL-1",                
                "hobi" => ["Menulis","Korupsi"],                
                "cita" => "Jadi Orang Kaya"          

             ],
];

foreach ($bestie as $data){
      echo "Nama : ".$data["nama"]."<br>";
      echo "Tanggal Lahir : ".$data["tanggal"]."<br>";
      echo "Kelas : ".$data["kelas"]."<br>";
      echo "Hobi : ";
      echo "<ul>";
      foreach($data["hobi"] as $hobi){
        echo "<li>".$hobi."</li>";
      };
      echo "</ul>";
      echo "Cita-cita : ".$data["cita"];
      echo "<hr>";
}

?>