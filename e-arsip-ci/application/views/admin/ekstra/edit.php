<?php
 $sambung = mysqli_connect("localhost", "root", "", "dishub") or die ("Gagal konek ke server.");
//$edit=mysql_query("SELECT * FROM mhs WHERE nim='$_GET[nim]'");
//$r_edit=mysql_fetch_array($edit);
$nip = $_GET['nip'];
$query = "SELECT * FROM mhs WHERE nip='$nip'";
?>
<html>
<head><title>Edit Data</title></head>
<body>
<form name="form1" method="post" action="update.php">
<table>
<tr>
<td>NIP</td><td><input type="text" name="nip" value="<?php echo $buff['nip']; ?>"></td></tr>
<tr><td>GENDER</td><td><input type="text" name="gender" value="<?php echo $buff['gender']; ?>"></td></tr>
<tr><td>NAMA</td><td><input type="text" name="nama" value="<?php echo $buff['nama']; ?>" size="50"></td></tr>
<tr><td>TEMPAT</td><td><input type="text" name="tell" value="<?php echo $buff['tell']; ?>"></td></tr>
<tr><td>TANGGAL LAHIR</td><td><td><input type="date" name="tl" value="<?php echo $buff['tl']; ?>"></td></tr>
<tr><td>JABATAN</td><td><input type="text" name="jabatan" value="<?php echo $buff['jabatan']; ?>"></td></tr>
<tr><td>BIDANG</td><td><input type="text" name="bidang" value="<?php echo $buff['bidang']; ?>"></td></tr>
<tr><td>KONTAK</td><td><input type="text" name="kontak" value="<?php echo $buff['kontak']; ?>" size="50"></td></tr>
<input value="Simpan" type="submit" name="submit"/>
<input type="button" value="Kembali" onClick="self.history.back()"></td></tr>
</table>
</form>
</body>
</html>