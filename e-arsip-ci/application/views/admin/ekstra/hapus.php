<?php
include("koneksi.php");
mysqli_query( "SELECT * FROM mhs WHERE nip='$nip'");
echo"Data Telah dihapus<br>
<a href=\"indexx.php\">Kembali</a>";
?>