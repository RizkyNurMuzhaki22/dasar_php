<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<hr>
<div class="card container col-sm-8">
  <div class="card-header">
    <center><h2>Biodata:</h2></center>
  </div>
  <div class="card-body">
  <form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama:</label>
    <input type="text" class="form-control" name="nama" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tempat Lahir:</label>
    <input type="text" class="form-control" name="tempat" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Lahir:</label>
    <input type="date" class="form-control" name="tanggal" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Jenis Kelamin</label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="kelamin" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Laki-laki
  </label>
</div>
  </div>
 
<div class="form-check">
  <input class="form-check-input" type="radio" name="kelamin" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Perempuan
  </label>
</div>
</div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat:</label>
    <textarea class="form-control" name="alamat" rows="3"></textarea>
  </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom04">Agama</label>
      <select class="custom-select" name="agama" required>
        <option selected disabled value="">Masukkan Agama</option>
        <option>Islam</option>
        <option>Kristen</option>
        <option>Hindu</option>
        <option>Budha</option>
      </select>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom04">Pendidikan Terakhir:</label>
      <select class="custom-select" name="pendidikan" required>
        <option selected disabled value="">Masukkan Pendidikan</option>
        <option>SD/MI</option>
        <option>SMP/Mts</option>
        <option>SMA/SMK/MA</option>
        <option>S1</option>
        <option>S2</option>
      </select>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom04">Cita-Cita</label>
      <select class="custom-select" name="cita" required>
        <option selected disabled value="">Masukkan Cita-cita</option>
        <option>Programmer</option>
        <option>Guru</option>
        <option>Arsitek</option>
        <option>Pengangguran</option>
      </select>
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Kata-kata Bijak</label>
    <textarea class="form-control" name="kata" rows="3"></textarea>
  </div>
  <div>
  <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
  <button type="reset" name="" class="btn btn-danger">Reset</button>
</form>
  </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
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

    class biodata{
        public function data1($nama2,$tempat2,$tanggal2,$kelamin2,$alamat2,$agama2,$pendidikan2,$cita2,$kata2){
            echo "<center>";
            echo "Nama Anda :".$nama2."<br>";
            echo "Tempat Tanggal Lahir Anda :".$tempat2."<br>";
            echo "Tanggal Lahir Anda :".$tanggal2."<br>";
            echo "Jenis Kelamin Anda :".$kelamin2."<br>";
            echo "Alamat Anda :".$alamat2."<br>";
            echo "Agama Anda :".$agama2."<br>";
            echo "Pendidikan Terakhir Anda :".$pendidikan2."<br>";
            echo "Cita-Cita Anda :".$cita2."<br>";
            echo "Kata-Kata Bijak Anda :".$kata2."<br>";
            echo "</center>";
        }
    }
    $cetak = new biodata;
    echo $cetak -> data1($nama,$tempat,$tanggal,$kelamin,$alamat,$agama,$pendidikan,$cita,$kata);
}
?>