<?php
include "connection.php";

  $idp = $_GET['idp'];
  $result = mysqli_query($conn, "SELECT * FROM datapangkalan WHERE idp=$idp");
  $row = mysqli_fetch_array($result);

  if (isset($_POST['submit'])) {
    $id_registrasi = $_POST['id_registrasi'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];


     $result = mysqli_query ($conn, "UPDATE datapangkalan SET nama='$nama', alamat='$alamat', no_telp='$no_telp' WHERE idp=$idp");
  if ($result) {
    header("location:datapangkalan.php");
  } else {
    echo "Gagal mengubah data";
  }

  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
    <style>
        body{
            background: url("https://www.euimg.com/wp-content/uploads/2022/02/white-aesthetic-wallpaper-euimg-8.jpg");
        }
    </style>
<body>
<div class="container py-5">
   <div class="card border-0 shadow rounded-3 my-5">
      <div class="card-body p-4 p-sm-5">
        <h2>Edit Data</h2> 

        <form class="col col-sm-5 col-lg-6 col-md-7" action="" method="POST">
            <div class="mb-3">
                <label class="form-label">ID REgist</label>
                <input type="text" name="id_registrasi" placeholder="ID Regist" value="<?= $row['id_registrasi']?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">nama</label>
                <input type="text" name="nama" placeholder="Nama" value="<?= $row['nama']?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
            <textarea name="alamat" placeholder="Masukan Alamat" placeholder="Masukan Alamat" class="form-control"></textarea>
          </div>
          <div class = "mb-3">
            <label class="form-label">Nomor Telepon</label><br>
            <input type="text" name="no_telp" placeholder="Masukan Nomor Telepon" value="<?= $row['no_telp']?> "class="form-control" placeholder="Masukan Nomor Telepon">
          </div>
            
          <section>
   <button type="submit" name="submit" class="btn btn-primary">Submit
   </button>
   <a href="datapangkalan.php" class="btn btn-danger my-5">Cancel</a>
   </section>
        </form>
      </div>
    </div>
</div>
</html>  
</body>