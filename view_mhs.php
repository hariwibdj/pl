

<?php
include "koneksi.php";

$sql = "SELECT * FROM tblmahasiswa";
$result = mysqli_query($conn,$sql);




?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1>Daftar mahasiswa</h1>


    <table class="table table-hover">
        <tr>
            <thead>
                <th>ID </th>
                <th>NPM </th>
                <th>Nama </th>
                <th>emai </th>
            </thead>
        </tr>
        <?php
        if(mysqli_num_rows($result)>0 ){
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <tbody>
                    <td><?=$row['id']?></td>
                    <td><?=$row['npm']?></td>
                    <td><?=$row['nama']?></td>
                    <td><?=$row['email']?></td
                    </tbody>
                </tr>
            <?php
            }
        }
        else
        {
            ?>
            <tr>
                <td colspan="4" align="center"> <?php echo "<h2> Data tidak ada </h2>"; ?></td>
            </tr>
            <?php        }
        ?>
        
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>