<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPORAN BIODATA KARYAWAN DINAS PERHUBUNGAN KABUPATEN KUANSING</title>
</head>
<body>
<div class="container">
    <center><h2>BIODATA PROFIL KARYAWAN DINAS PERHUBUNGAN KUANTAN SINGINGI<h2></center>
    <center><img src="<?= base_url('vendor/') ?>img/logo.png" width="100"><center>
                    
    <!--untuk memaggil halaman tambah atau file create.php-->
    <div id="prit-area">
        <table border="10" width="80%">
            <tr>
<center><th>No</th></center>
<center><th>NIP</th></center>
<center><th>NAMA KARYAWAN</th></center>
<center><th>GENDER</th></center>
<center><th>TEMPAT LAHIR/TANGGAL LAHIR</th>
<center><th>ALAMAT</th></center>
<center><th>KONTAK</th></center>
<center><th>JABATAN</th></center>
</tr>
<?php
$no=1;
foreach ($hasil as $row) {
?>
<tr>
<td><?php echo $no; ?></td>
<center><td><?php echo $row['nip'] ?></td></center>
<center><td><?php echo $row['nama_karyawan'] ?></td></center>
<center><td><?php echo $row['gender'] ?></td></center>
<center><td><?php echo $row['tempat_lahir']?></td></center>
<center><td><?php echo $row['alamat'] ?></td></center>
<center><td><?php echo $row['kontak'] ?></td></center>
<center><td><?php echo $row['jabatan'] ?></td></center>
<td>

</tr>
<?php
$no++;
}
?>
</table>
</div>
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalConntents = document.body.innerHTML;

        document.body,innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }

    printDiv("prit-area");
    </script>
</body>
</html>