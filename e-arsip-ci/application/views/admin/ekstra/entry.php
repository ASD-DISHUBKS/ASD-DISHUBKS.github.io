<?php
include("koneksi.php");
      $nip = $_POST['nip'];
      $gender = $_POST['gender'];
     $nama = $_POST['nama'];
     $tell = $_POST['tell'];
     $tl = $_POST['tl'];
     $jabatan = $_POST['jabatan'];
     $bidang = $_POST['bidang'];
     $kontak = $_POST['kontak'];
                 
$query = mysqli_query("insert into mhs values  ('$nip','$gender','$nama','$tell','$tl','$jabatan','$bidang','$kontak')");
echo "Data Telah disimpan<br>
<a href=\"indexx.php\">Kembali</a>";
?>
