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
    <?php $this->load->view('templates/pagebar'); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php $this->load->view('templates/topbar'); ?>
            <!-- End of Topbar -->
<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>COMMON TOOLS BY FERDI APRILIAN</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    
    <body>
        <div class="container col-lg-9">
            
                <form action="proses.php" method="post">
                    
                    <!-- KOP -->
                            <div class="form-group mb-0">
                            <label for="">1.Domisili</label>
                            <select name="a" class="form-control">
                            <option value=""></option>
                            <option value="Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah">Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah</option>
                            <option value="KABUPATEN KUANTAN SINGINGI">KABUPATEN KUANTAN SINGINGI</option>
                            </select>
                            </div>
							
                            <div class="form-group mb-2">
                            <input type="text" name="ta" class="form-control">
                            </div>
                                            
                            <div class="form-group mb-0">
                            <label for="">2.Tempat</label>
                            <select name="b" class="form-control">
                            <option value=""></option>
                            <option value="Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah">Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah</option>
                            <option value="Kab. Kuantan Singingi">Kab. Kuantan Singingi</option>
                            </select>
                            </div>
                            <div class="form-group mb-2">
                            <input type="text" name="tb" class="form-control">
                            </div>

                            <div class="form-group mb-0">
                            <label for="">3.Nomor Telpon</label>
                            <select name="c" class="form-control">
                            <option value=""></option>
                            <option value="Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah">Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah</option>
                            <option value="0760-561847">0760-561847</option>
                            </select>
                            </div>
                            <div class="form-group mb-2">
                            <input type="text" name="tc" class="form-control">
                            </div>

                            <div class="form-group mb-0">
                            <label for="">4.Kode POS</label>
                            <select name="d" class="form-control">
                            <option value=""></option>
                            <option value="Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah">Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah</option>
                            <option value="29562">29562</option>
                            </select>
                            </div>
                            <div class="form-group mb-2">
                            <input type="text" name="td" class="form-control">
                            </div>

                            <div class="form-group mb-0">
                            <label for="">5.Daerah</label>
                            <select name="e" class="form-control">
                            <option value=""></option>
                            <option value="Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah">Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah</option>
                            <option value="TELUK KUANTAN">TELUK KUANTAN</option>
                            </select>
                            </div>
                            <div class="form-group mb-2">
                            <input type="text" name="te" class="form-control">
                            </div>
                            <!-- KOP -->

                            <!-- ISI SURAT -->
                            <div class="form-group mb-0">
                            <label for="">6.Jenis Surat</label>
                            <select name="f" class="form-control">
                            <option value=""></option>
                            <option value="Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah">Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah</option>
                            <option value="SURAT PERINTAH TUGAS">SURAT PERINTAH TUGAS</option>
                            </select>
                            </div>
                            <div class="form-group mb-2">
                            <input type="text" name="tf" class="form-control">
                            </div>

                            <div class="form-group mb-0">
                            <label for="">7.Nomor Surat</label>
                            <select name="g" class="form-control">
                            <option value=""></option>
                            <option value="Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah">Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah</option>
                            <option value="551/DISHUB-KS/SPT/I/2023/">551/DISHUB-KS/SPT/I/2023/</option>
                            </select>
                            </div>
                            <div class="form-group mb-2">
                            <input type="text" name="tg" class="form-control">
                            </div>

                            <div class="form-group mb-0">
                            <label for="">8.Dasar</label>
                            <select name="h" class="form-control">
                            <option value=""></option>
                            <option value="Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah">Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah</option>
                            <option value="Perintah dari Kepala Dinas Perhubungan Kabupaten Kuantan Singingi">Perintah dari Kepala Dinas Perhubungan Kabupaten Kuantan Singingi</option>
                            </select>
                            </div>
                            <div class="form-group mb-2">
                            <input type="text" name="th" class="form-control">
                            </div>

                            <div class="form-group mb-0">
                            <label for="">9.Nama Penerima SPT(1)</label>
                            <select name="i" class="form-control">
                            <option value=""></option>
                            <option value="Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah">Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah</option>
                            <option value="MUHAMMAD YOGIE RIANDHI.S.Tr.Tra">MUHAMMAD YOGIE RIANDHI.S.Tr.Tra</option>
                            </select>
                            </div>
                            <div class="form-group mb-2">
                            <input type="text" name="ti" class="form-control">
                            </div>

                            <div class="form-group mb-0">
                            <label for="">10.NIP Penerima SPT(1)</label>
                            <select name="j" class="form-control">
                            <option value=""></option>
                            <option value="Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah">Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah</option>
                            <option value="19971227 202203 1 004">19971227 202203 1 004</option>
                            </select>
                            </div>
                            <div class="form-group mb-2">
                            <input type="text" name="tj" class="form-control">
                            </div>

                            <div class="form-group mb-0">
                            <label for="">11.Jabatan Penerima SPT(1)</label>
                            <select name="k" class="form-control">
                            <option value=""></option>
                            <option value="Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah">Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah</option>
                            <option value="Pengawas Lalu Lintas Darat">Pengawas Lalu Lintas Darat</option>
                            </select>
                            </div>
                            <div class="form-group mb-2">
                            <input type="text" name="tk" class="form-control">
                            </div>

                            <div class="form-group mb-0">
                            <label for="">12.Perihal/Keperluan Isi Surat</label>
                            <select name="l" class="form-control">
                            <option value=""></option>
                            <option value="Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah">Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah</option>
                            <option value="Pemanduan Plt,Bupati Kuantan Singingi Dalam Rangka  Acara Pelantikan dan Pengambilan Sumpah Pejabat Administrator di Lingkungan Kecamatan Sentajo Raya di Kantor Camat Sentajo Raya Tanggal 18 Januari 2023.">Pemanduan Plt,Bupati Kuantan Singingi Dalam Rangka  Acara Pelantikan dan Pengambilan Sumpah Pejabat Administrator di Lingkungan Kecamatan Sentajo Raya di Kantor Camat Sentajo Raya Tanggal 18 Januari 2023.</option>
                            </select>
                            </div>
                            <div class="form-group mb-2">
                            <input type="text" name="tl" class="form-control">
                            </div>

                            <div class="form-group mb-0">
                            <label for="">13.Ditetapkan Di</label>
                            <select name="m" class="form-control">
                            <option value=""></option>
                            <option value="Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah">Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah</option>
                            <option value="Teluk Kuantan">Teluk Kuantan</option>
                            </select>
                            </div>
                            <div class="form-group mb-2">
                            <input type="text" name="tm" class="form-control">
                            </div>

                            <div class="form-group mb-0">
                            <label for="">14.Pada Tanggal</label>
                            <input type="date" name="n" class="form-control">
                            <div class="form-group mb-2">
                            </div>

                            <div class="form-group mb-0">
                            <label for="">15.Jabatan Pengirim Surat</label>
                            <select name="o" class="form-control">
                            <option value=""></option>
                            <option value="Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah">Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah</option>
                            <option value="Plt,KEPALA DINAS PERHUBUNGAN KABUPATEN KUANTAN SINGING">Plt,KEPALA DINAS PERHUBUNGAN KABUPATEN KUANTAN SINGING</option>
                            </select>
                            </div>
                            <div class="form-group mb-2">
                            <input type="text" name="to" class="form-control">
                            </div>

                            <div class="form-group mb-0">
                            <label for="">16.Nama Pengirim Surat</label>
                            <select name="p" class="form-control">
                            <option value=""></option>
                            <option value="Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah">Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah</option>
                            <option value="HENDRI WAHYUDI,SE">HENDRI WAHYUDI,SE</option>
                            </select>
                            </div>
                            <div class="form-group mb-2">
                            <input type="text" name="tp" class="form-control">
                            </div>

                            <div class="form-group mb-0">
                            <label for="">17.Nip Pengirim Surat</label>
                            <select name="q" class="form-control">
                            <option value=""></option>
                            <option value="Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah">Tekan Pilihan Kosong Diatas ini Untuk Menggunakan Input Teks Dibawah</option>
                            <option value="19790814 201001 1 006">19790814 201001 1 006</option>
                            </select>
                            </div>
                            <div class="form-group mb-2">
                            <input type="text" name="tq" class="form-control">
                            </div>

                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-success">INPUTKAN DATA DAN PREVIEW</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
        </div>
        </div>
    </body>
    </html>