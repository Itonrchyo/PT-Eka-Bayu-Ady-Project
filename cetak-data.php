<!DOCTYPE html>
<html>
<head>
 <title>Data Pangkalan PT. EKA BAYU ADY</title>
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
 <table>
 <tr>
 <th>No</th>
 <th>ID Registrasi</th>
 <th>Nama</th>
 <th>Alamat</th>
 <th>Nomor Telepon</th>
 </tr>
 <?php 
 // koneksi database
 $conn = mysqli_connect("localhost","root","","pwpb");

 // menampilkan data pegawai
 $data = mysqli_query($conn,"select * from datapangkalan");
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td style='text-align: center;'><?php echo $d['idp'] ?></td>
 <td><?php echo $d['id_registrasi']; ?></td>
 <td><?php echo $d['nama']; ?></td>
 <td><?php echo $d['alamat']; ?></td>
 <td><?php echo $d['no_telp']; ?></td>
 </tr>
 <?php 
 }
 ?>
    </table>
    <script>
 window.print();
 </script>
</body>
</html>