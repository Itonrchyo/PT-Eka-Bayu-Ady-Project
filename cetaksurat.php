<?php
include "connection.php"

?>

<!DOCTYPE html>
<html>
<head>
  <title>Surat Kuasa</title>
  <style>
        #judul{
            text-align:center;
        }

        #halaman{
            width: auto; 
            height: auto; 
            position: absolute; 
            border: 3px solid; 
            padding-top: 10px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 10px;
        }
            

    </style>
</head>
<body>
<div id=halaman>
<?php 
$result = mysqli_query($conn, "SELECT * FROM supir WHERE nama='BAMBANG' OR plat='R 9412 IH'");
while ($d = mysqli_fetch_array($result)) {
    ?>
      <img src="pertamina.png" style="width:75px;height:75px;align=right;" align=right> 
  <h4 id=judul>SURAT KUASA PENGAMBILAN LPG 3 KG
  <P>PT.EKA BAYU ADY</p></h4>
  <p>Kepada SPBE/SPPBE,</p>
  <p>PT. KUSUMA BANYUMASAN JAYA GAS</p>
  <p>Di  KEBASEN, BANYUMAS</p><br> 
  <p>Dengan hormat,</p>
  <p>Mohon bantuannya untuk pelaksanaan transaksi pengambilan LPG, sebagai berikut :</p>
    <pre><ul>
    <li>No.Armada                     :<?php echo $d['plat']; ?></li>
    <li>Nama Pengemudi                :<?php echo $d['nama']; ?></li>
    <li>Nomor SA                      :43527356</li>
    <li>No LO                         :</li>
    <li>Kuantitas tabung yang diambil :           -  Refill                  560 Tabung
                                          -  Penukaran               ... Tabung
                                          -  Tabung baru             ... Tabung
                                          -------------------------------------
                                          TOTAL PENGEMBALIAN TABUNG  560 Tabung
    </li>
</pre>
    </p>
<p>Demikian, atas bantuannya kami ucapkan terima kasih.</p>
  <p>Hormat kami,</p><br><br>
  <p>Ngatmin Kustono</p>

  <?php 
 }
 ?>
 </div>
 <script> 
 window.print();
 </script>
</body>
</html>
