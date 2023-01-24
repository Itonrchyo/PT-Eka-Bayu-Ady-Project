<!DOCTYPE html>
<html>
<head>
 <title>Panduancode Cetak laporan PDF Di PHP Dan MySQLi</title>
</head>
<body>
 <style type="text/css">
 body{
 font-family: sans-serif;
 }
 table{
 margin: 20px auto;
 border-collapse: collapse;
 }
 table th,
 table td{
 border: 1px solid #3c3c3c;
 padding: 3px 8px;

 }
 a{
 background: blue;
 color: #fff;
 padding: 8px 10px;
 text-decoration: none;
 border-radius: 2px;
 }

    .tengah{
        text-align: center;
    }
 </style>
        <h1 class='tengah'>Cetak laporan PDF Di PHP Dan MySQLi <br/> <br/><a href='https://www.panduancode.com'> www.panduancode.com</a></h1>
        <br/>
        <div class='tengah'>
 <a target="_blank" href="cetak.php">Cetak Laporan</a>
 <a target="_blank" href="editpangkalan.php">Edit</a>
 <a href="tambah-datapangkalan.php" class="btn btn-warning my-5">Create User</a>
        </div>
 <table>
 <tr>
 <th>No</th>
 <th>ID Registrasi</th>
 <th>Nama</th>
 <th>Alamat</th>
 <th>Nomor Telepon</th>
 <th>Aksi</th>
 </tr>
 <?php
 // koneksi database
 $koneksi = mysqli_connect("localhost","root","","pwpb");

 // menampilkan data pegawai
 $data = mysqli_query($koneksi,"select * from datapangkalan");
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td style='text-align: center;'><?php echo $d['idp'] ?></td>
 <td><?php echo $d['id_registrasi']; ?></td>
 <td><?php echo $d['nama']; ?></td>
 <td><?php echo $d['alamat']; ?></td>
 <td><?php echo $d['no_telp']; ?></td>
 <td>   
       <a href="hapus-data.php?idp=<?= $row['idp']?>" class="btn btn-danger">Delete</a>
</td>
 </tr>
 <?php
 }
 ?>
 </table>
</body>
</html>