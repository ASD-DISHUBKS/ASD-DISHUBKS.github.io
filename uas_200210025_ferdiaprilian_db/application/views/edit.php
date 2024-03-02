<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> BIODATA KARYAWAN DINAS PERHUBUNGAN KABUPATEN KUANSING </title>
</head>
<body>
    <form class="" action="<?php echo base_url('Admin/proses_edit')?>" method="post">
    <label>NIP</label><br>
    <!-- untuk menampung id lama -->
    <input type="hidden" name="nip" value="<?= $result['nip']?>">
    <!-- --------------------- -->
    <input type="text" name="nip" value="<?= $result['nip']?>">
    <p></p>

    <label>NAMA KARYAWAN</label><br>
    <input type="text" name="nama_karyawan" value="<?= $result['nama_karyawan']?>">
    <p></p>

    <label>GENDER</label><br>
      
<select name="gender">
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
<option value="Pria">Pria</option>
<option value="Wanita">Wanita</option>
</select>
<br>
<br>

    <label>TEMPAT LAHIR/TANGGAL LAHIR</label><br>
    <input type="text" name="tempat_lahir" value="<?= $result['tempat_lahir']?>">
    <input type="date" name="tanggal_lahir" value="<?= $result['tanggal_lahir']?>">
    <p></p>

    <label>ALAMAT</label><br>
    <input type="text" name="alamat" value="<?= $result['alamat']?>">
    <p></p>

    <label>KONTAK</label><br>
    <input type="text" name="kontak" value="<?= $result['kontak']?>">
    <p></p>

    <label>JABATAN</label><br>
      
<select name="jabatan">
<option value="karyawan">karyawan</option>
<option value="manager">manager</option>
<option value="mandor">mandor</option>
<option value="kepala divisi">kepala divisi</option>
<option value="kepala divisi 2">kepala divisi 2</option>
<option value="kepala divisi 3">kepala divisi 3</option>
</select>
<br>
<br>


    <button type="submit" name="button">Simpan</button>
    <a href="<?php echo base_url('Admin')?>"><button type="button" name="button">Batal</button>
</a>
</form>
</body>
</html>