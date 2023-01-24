<?php
include "connection.php";

if (isset($_POST['submit'])) {
  $id_registrasi = $_POST['id_registrasi'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $no_telp = $_POST['no_telp'];

  $query = "INSERT INTO datapangkalan (id_registrasi, nama, alamat, no_telp) VALUES ('$id_registrasi', '$nama', '$alamat', '$no_telp')";
  $result = mysqli_query($conn, $query);
  $_SESSION['message'] = 'Data has been Created';
  header('location: datapangkalan.php');

  if ($result) {
    header("location:datapangkalan.php");
  } else {
    echo "Gagal menambah data";
  }

  mysqli_close($conn);
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
<div class="col-sm-9 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
        <div class="card-body p-4 p-sm-5">
        <h2>Tambah Data</h2> 
<form class="col col-sm-5 col-lg-6 col-md-7" action="tambah-datapangkalan.php" method="post">
   <div class ="mb-3">
   <label class="form-label">ID Registrasi</label><br>
   <input type="text" name="id_registrasi" class= "form-control" placeholder="Masukan ID Registrasi">
   </div> 

   <div class = "mb-3">
   <label class="form-label">Nama</label><br>
   <input type='text' name="nama" class= "form-control" placeholder="Masukan Nama">
   </div>
   <div class = "mb-3">
   <label class="form-label">Alamat</label><br>
  <textarea name="alamat" class="form-control" placeholder="Masukan Alamat"></textarea>
   </div>
   <div class = "mb-3">
   <label class="form-label">Nomor Telepon</label><br>
  <input type="text" name="no_telp" class="form-control" placeholder="Masukan Nomor Telepon">
   </div>
<section>
   <button 
   type="submit" name="submit" class="btn btn-primary">Submit
   </button>
   <a href="datapangkalan.php" class="btn btn-danger my-5">Cancel</a>
</section>
</form>
</div>
</div>
</div>
</div>
    
</body>
</html>

