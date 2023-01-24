<?php
    require 'connection.php';
    $idp = $_GET['idp'];
    $result = mysqli_query($conn, "SELECT * FROM datapangkalan WHERE idp=$idp");
    $row = mysqli_fetch_assoc($result);


    $result = mysqli_query($conn, "DELETE FROM datapangkalan WHERE idp=$idp");
    if ($result) {
        header('location: datapangkalan.php');
        $_SESSION['message'] = 'Data has been Deleted';
    }