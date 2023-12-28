<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Pesanan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Beranda Utama</a></li>
                    <li class="breadcrumb-item active">Data Pesanan</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-body">
                        <h5>List Data Pesanan</h5>
                        <?php if (session()->getFlashdata('error')) : ?>
                            <div class="card-body col-md-5">
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-ban"></i>Data Pesanan</h5>
                                    <?= session()->getFlashdata('error'); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tanggal Pesanan</th>
                                    <th scope="col">Pelanggan</th>
                                    <th scope="col">Status Pesanan</th>
                                    <th scope="col">Total Harga</th>
                                    <th scope="col">Bunga</th>
                                    <th colspan="3" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($pesanan as $row) : ?>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <td><?= $row['211170_tanggalpesanan']; ?></td>
                                        <td><?= $row['211170_namapelanggan']; ?></td>
                                        <td><?= $row['211170_statuspesanan']; ?></td>
                                        <td><?= $row['211170_totalharga']; ?></td>
                                        <td><?= $row['211170_namabunga']; ?></td>
                                        <td class="text-center">
                                            <a href="/pesanan/delete/<?= $row['211170_idpesanan']; ?>" class="btn btn-danger" onclick="return confirm ('Apakah Anda yakin?');">Hapus</a>

                                            <!-- Dropdown untuk mengganti status pesanan -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <?= $row['211170_statuspesanan']; ?>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="/pesanan/updateStatus/<?= $row['211170_idpesanan']; ?>/Dalam Proses">Dalam Proses</a>
                                                    <a class="dropdown-item" href="/pesanan/updateStatus/<?= $row['211170_idpesanan']; ?>/Dikirim">Dikirim</a>
                                                    <a class="dropdown-item" href="/pesanan/updateStatus/<?= $row['211170_idpesanan']; ?>/Selesai">Selesai</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>