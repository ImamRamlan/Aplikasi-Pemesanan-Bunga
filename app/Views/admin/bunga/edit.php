<!-- /app/Views/admin/bunga/edit.php -->

<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Data Bunga</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/bunga">Data Bunga</a></li>
                    <li class="breadcrumb-item active">Edit Bunga</li>
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
                        <a href="/bunga" class="btn btn-primary">Kembali</a>
                        <form action="/bunga/update/<?= $bunga['211170_idbunga']; ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label>Nama Bunga</label>
                                <input type="text" class="form-control" name="namabunga" value="<?= $bunga['211170_namabunga']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" required><?= $bunga['211170_deskripsi']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Harga Satuan</label>
                                <input type="text" class="form-control" name="hargasatuan" value="<?= $bunga['211170_hargasatuan']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Stok</label>
                                <input type="text" class="form-control" name="stok" value="<?= $bunga['211170_stok']; ?>" required>
                            </div>
                            <div class="form-group">
                            <img src="<?= base_url('uploads/bunga/' . $bunga['211170_gambar']); ?>" alt="" width="150px"><br> 
                                <label>Gambar</label>
                                <input type="file" class="form-control" name="gambar">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>
