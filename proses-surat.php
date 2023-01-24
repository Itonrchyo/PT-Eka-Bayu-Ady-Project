<?php
  $nama = $_POST["nama"];
  $alamat = $_POST["alamat"];
  $tanggal = date("d F Y");

  $surat = "
  Kepada Yth,
  $nama
  $alamat

  Assalamu'alaikum Wr. Wb.

  Dengan hormat,

  Sehubungan dengan surat permohonan Anda tanggal 2 Mei 2021 yang lalu, kami dengan hormat memberitahukan bahwa permohonan Anda telah kami terima dan sedang kami proses.

  Kami akan menghubungi Anda kembali setelah proses selesai.

  Terima kasih atas perhatiannya.

  Hormat kami,

  [Nama Perusahaan]

  $tanggal
  ";

  echo $surat;
?>
