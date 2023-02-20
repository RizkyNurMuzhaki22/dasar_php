<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <center>
        <h1>KKM</h1>
        <table>
            <tr>
                <td>Masukkan Nilai</td>
                <td>:</td>
                <td><input type="number" name="bilangan1" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="hitung" value="HITUNG"></td>
            </tr>
        </table>
    </center>
    </form>
</body>
</html>

<?php
if(isset($_POST["hitung"])){
    $angka1 = $_POST['bilangan1'];

    if($angka1 >= 75){
        $status = "Lulus";
    }
    else{
        $status = "Tidak Lulus";
    }
    echo "<center>";
    echo "$status";
    echo "</center>";
}
?>