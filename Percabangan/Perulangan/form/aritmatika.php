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
    <form action="" method="POST">
        <table>
            <tr>
                <td>Bilangan ke-1</td>
                <td>:</td>
                <td><input type="number" name="bilangan1" id=""></td>
            </tr>
            <tr>
                <td>Bilangan ke-2</td>
                <td>:</td>
                <td><input type="number" name="bilangan2" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="hitung" value="HITUNG"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>
<?php
if(isset($_POST['hitung'])){
    $bilangan_1 = $_POST['bilangan1'];
    $bilangan_2 = $_POST['bilangan2'];

    $hasil = $bilangan_1 + $bilangan_2;
    
    echo "Hasilnya Adalah :".$hasil;
}
?>