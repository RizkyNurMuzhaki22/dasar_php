<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <center>
        <h1>Form Biodata Diri</h1>
    </center>
    <form action="" method="POST">
        <center>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat"></td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="radio" name="kelamin" value="Laki-laki">Laki-laki
                        <input type="radio" name="kelamin" value="Perempuan">Perempuan</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><select name="agama" id="" >
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td><select name="pendidikan" id="">
                        <option value="Paud">Paud</option>
                        <option value="TK">TK</option>
                        <option value="SD/MI">SD/MI</option>
                        <option value="SMP/Mts">SMP/Mts</option>
                        <option value="SMA/SMK">SMA/SMK</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Cita-Cita</td>
                    <td>:</td>
                    <td><select name="cita" id="" >
                        <option value="Programmer">Programmer</option>
                        <option value="Dokter">Dokter</option>
                        <option value="Pengusaha">Pengusaha</option>
                        <option value="Politikus">Politikus</option>
                        <option value="Arsitek">Arsitek</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Kata-Kata Bijak</td>
                    <td>:</td>
                    <td><textarea name="kata" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Tampilkan" name="simpan"></td>
                </tr>
                <hr>
            </table>
            <table>
                <hr>
            </table>
    </form>
    </center>
    <?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $kelamin = $_POST['kelamin'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan = $_POST['pendidikan'];
    $cita = $_POST['cita'];
    $kata = $_POST['kata'];

    echo "<center>";
    echo "Nama Anda :".$nama."<br>";
    echo "Tempat Tanggal Lahir Anda :".$tempat."<br>";
    echo "Tanggal Lahir Anda :".$tanggal."<br>";
    echo "Jenis Kelamin Anda :".$kelamin."<br>";
    echo "Alamat Anda :".$alamat."<br>";
    echo "Agama Anda :".$agama."<br>";
    echo "Pendidikan Terakhir Anda :".$pendidikan."<br>";
    echo "Cita-Cita Anda :".$cita."<br>";
    echo "Kata-Kata Bijak Anda :".$kata."<br>";
    echo "</center>";

}
?>
</body>
</html>