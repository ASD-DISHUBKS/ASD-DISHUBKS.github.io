<div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('templates/sidebar') ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php $this->load->view('templates/topbar'); ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <?php echo $this->session->flashdata('message'); ?>
                <!-- Content Row -->
                <div class="row">
                    <!-- total surat masuk -->
                    <div class="<?php if ($user == 'superadmin') {
                                    echo 'col-xl-3';
                                } else {
                                    echo 'col-xl-6';
                                } ?> col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Surat Masuk</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php foreach ($count_sm as $key) {
                                                echo $key->total;
                                            }  ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-envelope fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- total surat keluar -->
                    <div class="<?php if ($user == 'superadmin') {
                                    echo 'col-xl-3';
                                } else {
                                    echo 'col-xl-6';
                                } ?> col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Surat Keluar</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php foreach ($count_sk as $key) {
                                                echo $key->total;
                                            }  ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-envelope fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if ($user == 'superadmin') { ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Indeks</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php foreach ($count_indeks as $key) {
                                                    echo $key->total;
                                                }  ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-filter fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php foreach ($count_users as $key) {
                                                    echo $key->total;
                                                }  ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else {
                    } ?>
                </div>

                <!-- Content Row -->

                <div class="row">
                    <!-- Surat masuk hari ini -->
                    <div class="col-xl-6 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Surat Masuk hari ini</h6>
                                <div class="dropdown no-arrow">
                                    <a href="<?= base_url('admin/suratmasuk') ?>" class="text-dark" style="text-decoration: none">Lihat semua</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="suratmasuk" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nomor Surat</th>
                                                <th>Judul Surat</th>
                                                <th>Indeks</th>
                                                <th>Asal Surat</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Tanggal Diterima</th>
                                                <th>Keterangan</th>
                                                <th>Berkas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($sm_today as $sm) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $sm->no_suratmasuk; ?></td>
                                                    <td><?= $sm->judul_suratmasuk; ?></td>
                                                    <td><?= $sm->judul_indeks; ?></td>
                                                    <td><?= $sm->asal_surat; ?></td>
                                                    <td><?php $date = date_create($sm->tanggal_masuk);
                                                        echo date_format($date, 'd/m/Y'); ?></td>
                                                    <td><?php $date = date_create($sm->tanggal_diterima);
                                                        echo date_format($date, 'd/m/Y'); ?></td>
                                                    <td><?= $sm->keterangan; ?></td>
                                                    <td><a href="<?php echo base_url($user . '/download/' . $sm->berkas_suratmasuk) ?>"><i class="fas fa-download text-success"></i></a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-success">Surat Keluar hari ini</h6>
                                <div class="dropdown no-arrow">
                                    <a href="<?= base_url('admin/suratkeluar') ?>" class="text-dark" style="text-decoration: none">Lihat semua</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="suratkeluar" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nomor Surat</th>
                                                <th>Judul Surat</th>
                                                <th>Indeks</th>
                                                <th>Tujuan</th>
                                                <th>Tanggal Keluar</th>
                                                <th>Keterangan</th>
                                                <th>Berkas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($sk_today as $sk) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $sk->no_suratkeluar; ?></td>
                                                    <td><?= $sk->judul_suratkeluar; ?></td>
                                                    <td><?= $sk->judul_indeks; ?></td>
                                                    <td><?= $sk->tujuan; ?></td>
                                                    <td><?php $date = date_create($sk->tanggal_keluar);
                                                        echo date_format($date, 'd/m/Y'); ?></td>
                                                    <td><?= $sk->keterangan; ?></td>
                                                    <td><a href="<?php echo base_url($user . '/download/' . $sk->berkas_suratkeluar) ?>"><i class="fas fa-download text-success"></i></a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <canvas id="myChart" width="400" height="100"></canvas>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php $this->load->view('templates/copyright') ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('templates/barbar'); ?>
    <!-- End of Sidebar -->

<?php
if(isset($_POST))
?>

<?php
include_once("koneksi.php");
$query = mysqli_query($sambung,"SELECT * FROM mhs");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PEGAWAI DISHUB</title>
    <link rel="stylesheet" href="ferdiaprilianstyle.css">
</head>
<body>
    <div class="container">
    <h2>DATA PROFIL PEGAWAI DISHUB<h2>

        <table border="10">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nip</th>
                    <th>Gender</th>
                    <th>Nama</th>
                    <th>Tempat/Tanggal Lahir</th>
                    <th>Jabatan</th>
                    <th>Bidang</th>
                    <th>Kontak Yang Bisa Dihubungi</th>
                    <th colspan="3">Aksi</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 0;
                    while($buff = mysqli_fetch_assoc($query)){
                        $nomor++;
                        ?>

                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $buff["nip"]; ?></td>
                            <td><?php echo $buff["gender"]; ?></td>
                            <td><?php echo $buff["nama"]; ?></td>
                            <td><?php echo $buff["tell"] . "/" . $buff["tl"]?></td>
                            <td><?php echo $buff["jabatan"]; ?></td>
                            <td><?php echo $buff["bidang"]; ?></td>
                            <td><?php echo $buff["kontak"]; ?></td>
                            
                                <td><a href="edit.php?nip=<?php echo $buff['nip']; ?>" background-color="merah-muda">Edit</a>
                                <td><a href="hapus.php?nip=<?php echo $buff['nip']; ?>" background-color="biru-muda">Hapus</a>
                        </tr>
                        
                        <?php
                    };
                    mysqli_close($sambung);
                ?>
            </tbody>

            <div class="form-group mb-2">
            <button type="button" name="button" align="left"><a href="indexx.php" background-color="merah-muda" title="untuk menambah data">Tambah Data</a></button>
            </div>
</body>
</html>
                </table>
                
    </div>
                </div>
                </div>
                </div>