<?php
 session_start();
 include "../database/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>DATA</title>
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
        <br><br>
        <div class="container mt-5">
          <form action="" method="post">
              <table class="table table-striped">
          <thead>
            <tr class="bg-success">
              <th >No</th>
              <th >Nama</th>
              <th >Agama</th>
              <th >Alamat</th>
              <th >Jenis Kelamin</th>
              <th >Nomor Telpon</th>
            </tr>
          </thead>
            <?php
          $no=1;
          $data=mysqli_query($koneksi,"SELECT * FROM tb_data");
          while ($n = mysqli_fetch_array($data)){?>
              <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $n['nama'];?></td>
                  <td><?php echo $n['agama'];?></td>
                  <td><?php echo $n['alamat'];?></td>
                  <td><?php echo $n['jenis_kelamin'];?></td>
                  <td><?php echo $n['telpon'];?></td>
              </tr>
          <?php }
          ?>
        </table>
          </form>
        </div>
</body>
</html>>