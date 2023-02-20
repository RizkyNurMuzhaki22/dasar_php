<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Hasil Ujian Nasional</h1>
        <hr>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id=""></td>
                </tr>
                <tr>
                    <td>Matematika</td>
                    <td>:</td>
                    <td><input type="number" name="nilai1" id=""></td>
                </tr>
                <tr>
                    <td>Bahasa Indonesia</td>
                    <td>:</td>
                    <td><input type="number" name="nilai2" id=""></td>
                </tr>
                <tr>
                    <td>Bahasa Inggris</td>
                    <td>:</td>
                    <td><input type="number" name="nilai3" id=""></td>
                </tr>
                <tr>
                    <td>Produktif</td>
                    <td>:</td>
                    <td><input type="number" name="nilai4" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="PROSES" name="proses"></td>
                </tr>
            </table>
        </form>
    </center>
    <hr>
</body>
</html>
<?php
if(isset($_POST['proses'])){
    $nama = $_POST['nama'];
    $nilai_1 = $_POST['nilai1'];
    $nilai_2= $_POST['nilai2'];
    $nilai_3 = $_POST['nilai3'];
    $nilai_4 = $_POST['nilai4'];

    $akhir = ($nilai_1 + $nilai_2 + $nilai_3 + $nilai_4) / 4;

    if($akhir >= 75){
        $status = "Lulus";
    }
    else{
        $status = "Tidak Lulus";
    }
    echo "<center>";
    echo "Nama Anda :".$nama."<br>";
    echo "Nilai Matematika Anda :".$nilai_1."<br>";
    echo "Nilai Bahasa Indonesia Anda :".$nilai_2."<br>";
    echo "Nilai Bahasa Inggris :".$nilai_3."<br>";
    echo "Nilai Produktif Anda :".$nilai_4."<br>";
    echo "Nilai Akhir Anda :".$akhir."<br>";
    echo "Status :".$status;
    echo "</center>";
}
?>