<!-- /app/Views/admin/pegawai/edit.php -->

<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Data Pegawai</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/pegawai">Data Pegawai</a></li>
                    <li class="breadcrumb-item active">Edit Pegawai</li>
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
                        <a href="/admin/pegawai" class="btn btn-primary">Kembali</a>
                        <form action="/admin/update/<?= $pegawai['211170_idadmin']; ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" value="<?= $pegawai['211170_username']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Kata Sandi</label>
                                <input type="password" class="form-control" name="katasandi" required>
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <input type="text" class="form-control" name="level" value="<?= $pegawai['211170_level']; ?>" required>
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
