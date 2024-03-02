<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA KARYAWAN DINAS PERHUBUNGAN KABUPATEN KUANSING</title>
</head>
<body>
    <div class="container">
    <center><h2>BIODATA PROFIL KARYAWAN DINAS PERHUBUNGAN KUANTAN SINGINGI<h2></center>
    <center><img src="<?= base_url('vendor/') ?>img/logo.png" width="100"><center>
                    <br>
                    Gunakan link berikut untuk menuju halaman biodata secara rinci dari para pegawai DINAS PERHUBUNGAN KUANSING
                    <br><a href="https://idalamat.com/alamat/40031/dinas-perhubungan-kabupaten-kuantan-singingi">Selengkapnya klik tautan berikut ini<-</a></br>
                    </br>

    <!--untuk memanggil halaman tambah atau file create.php-->
<a href="<?php echo base_url('Admin/tambah') ?>"><button type="button" name="button" title="untuk menambah data">Tambah</button></a>
<a href="<?php echo base_url('Admin/laporan') ?>" target="_blank"><button type="button" name="button" title="untuk mencetak laporan">Laporan</button></a>

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
<center><th colspan="2">Aksi</th><center>
</tr>
<?php
$no = 0;
foreach ($hasil as $row) {
        $no++;
        ?>
<tr>
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
<!--memanggil halaman edit atau edit.php-->
<a	href="<?php	echo site_url('Admin/edit/'.$row['nip'])?>" title="tombol utk merubah data" button type="button" name="button" align="left">Ubah</a> |
<!--memanggil aksi delete-->
<a	href="<?php echo site_url('Admin/hapus/'.$row['nip'])?>"
onclick="javascript: return confirm('Yakin Mau dihapus <?php echo
$row['nama_karyawan'];?>')">Hapus</a>
</br>
</td>
</tr>
<?php
$no++;
}
?>
</table>

</body>
</html>