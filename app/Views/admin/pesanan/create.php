<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Data Pesanan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Beranda Utama</a></li>
                    <li class="breadcrumb-item active">Data Pesanan</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-body">
                        <?php if(session()->getFlashdata('success')) : ?>
                            <div class="alert alert-success">
                                <?= session()->getFlashdata('success') ?>
                            </div>
                        <?php elseif(session()->getFlashdata('error')) : ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>

                        <a href="/pesanan">Kembali</a>

                        <form action="/pesanan/store" method="post">
                            <?= csrf_field(); ?>
                            <div class="card card-primary">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Tanggal Pesanan</label>
                                        <input type="date" name="tanggalpesanan" class="form-control col-md-5" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Pelanggan</label>
                                        <select name="idpelanggan" class="form-control col-md-5" required>
                                        <option value="">--Pelanggan--</option>
                                            <?php foreach ($pelanggan as $row) : ?>
                                                <option value="<?= $row['211170_idpelanggan']; ?>">
                                                    <?= $row['211170_namapelanggan']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Status Pesanan</label>
                                        <select name="statuspesanan" class="form-control col-md-5" required>
                                            <option value="">--Status--</option>
                                            <option value="Dalam Proses">Dalam Proses</option>
                                            <option value="Dikirim">Dikirim</option>
                                            <option value="Selesai">Selesai</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Total Harga</label>
                                        <input type="number" name="totalharga" class="form-control col-md-5" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block col-md-4">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>
