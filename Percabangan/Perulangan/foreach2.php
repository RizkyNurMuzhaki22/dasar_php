<?php

$bestie = [
             [
                "nama" => "Rizky Nur Muzhaki",                
                "tanggal" => "22-Desember-2004",                
                "kelas" => "XI-RPL-1",                
                "hobi" => [["detail_hobi" => "Mengaji"],
                           ["detail_hobi" => "Membaca"],
                           
                        ],               
                "cita" => "Guru Agama"          

             ],
            
];

foreach ($bestie as $data){
      echo "Nama : ".$data["nama"]."<br>";
      echo "Tanggal Lahir : ".$data["tanggal"]."<br>";
      echo "Kelas : ".$data["kelas"]."<br>";
      echo "Hobi : ";

      echo "<ul>";
      foreach ($data["hobi"] as $datahobi){
            echo "<li>".$datahobi["detail_hobi"]."</li>";
      }
      echo "</ul>";
      echo "Cita-cita : ".$data["cita"];
      echo "<hr>";
}

?>