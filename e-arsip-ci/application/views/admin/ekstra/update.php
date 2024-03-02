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
                 $query = mysqli_query("update karyawan set gender='$gender', nama='$nama', tell='$tell', tl='$tl', jabatan='$jabatan', bidang='$bidang', kontak='$kontak' where nip='$nip'");
echo "Data Telah diupdate<br>
<a href=\"indexx.php\">Kembali</a>";
?>