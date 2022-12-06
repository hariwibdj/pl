<?php

require "koneksi.php";

if (isset($_POST['simpan'])){
   
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql ="INSERT INTO tblmahasiswa(npm,nama,email) VALUES ('$npm','$nama','$email')";
    $simpan = mysqli_query($conn, $sql);
    if($simpan){
        ?>
        <script>
         alert("Data Mahasiswa sudah disimpan");
       </script>
<?php
    }
    else
    {
        ?>
        <script>
         alert("Data tidak bisa disimpan");
       </script>
        <?php
    }

 }


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
      <h1>Input Data Mahasiswa</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <div class="mb-3">
      <label for="npm" class="form-label">NPM</label>
      <input type="text" class="form-control" id="npm" name="npm">
      
    </div>
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="mb-3">
      <label class="form-label" for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
  </form>


  <br>
  <hr>
  <?php
    include "view_mhs.php";
  ?>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>