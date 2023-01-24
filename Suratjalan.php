<?php
include "connection.php";

$query = "SELECT * FROM supir";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="d-flex justify-content-between align-items-center"> 
            <h1>Pilih Supir</h1>
            <div>
                <a href="homepage.php" class="btn btn-danger my-5">Back</a>
                <a href="logout.php" class="btn btn-primary my-5">Logout</a>

            </div>
        </div>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Plat Nomor</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $row['nama']?></td>
                    <td><?= $row['plat']?></td>
                    <td>
                    <a href="cetaksurat.php" target="_blank">Cetak Data</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
    
</body>
</html>



