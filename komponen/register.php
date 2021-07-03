<?php
 session_start();
 include "../database/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Regestrasi</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

     <link rel="icon" type="image/png" href="../assets/img/logo/1.ico">
    <link href="assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="bg-primary"></div>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top navbar-transparent">
              <a class="navbar-brand text-success" href="../index.php">Home</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="navbar-brand text-success" href="register.php">Regestrasi<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="navbar-brand text-success" href="data.php">Data</a>
                  </li>
                  <li class="nav-item">
                    <a class="navbar-brand text-success" href="contak.php">Contac</a>
                  </li>
                </ul>
              </div>
            </nav>
        </div>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50 mt-5">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Register</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Anda" />
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <input type="text" name="agama" class="form-control" placeholder="Masukan Agama anda" />
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat Anda" />
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin">
                            <option value="L">Laki-Laki</option>
                            <option value="P">perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nomor Telpon</label>
                        <input type="text" name="telpon" class="form-control" placeholder="Masukan Nomor Telepon" />
                    </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="register">Register</button>
                        </div>
                    </form>
                        <?php
                          
                                if (isset($_POST['register'])) {
                                    $nama   =$_POST['nama'];
                                    $agama  =$_POST['agama'];
                                    $alamat =$_POST['alamat'];
                                    $jenis_kelamin  =$_POST['jenis_kelamin'];
                                    $telpon  =$_POST['telpon'];

                                   $simpan="INSERT INTO tb_data (nama,agama,alamat,jenis_kelamin,telpon) VALUES ('$nama','$agama','$alamat','$jenis_kelamin','$telpon')";
                                   $data=mysqli_query($koneksi, $simpan);
                                    if ($data) {
                                        echo "<script language=\"javascript\">alert(\"DATA ANDA BERHASIL DI SIMPAN !\");document.location.href='register.php';</script>";
                                    }
                                    else{
                                         echo "<script language=\"javascript\">alert(\"DATA ANDA GAGAL DI SIMPAN !\");document.location.href='register.php';</script>";
                                   }}
                                 ?>
                </div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>
<!-- end document-->