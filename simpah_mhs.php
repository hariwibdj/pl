<?php

require "koneksi.php";

if (isset($_POST['simpan'])){
   
    if($_POST['npm'] = ""){
        echo "npm tidak boleh kosong";
    }


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