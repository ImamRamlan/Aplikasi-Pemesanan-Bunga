<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Beranda Utama</a></li>
          <li class="breadcrumb-item active">Data Pegawai</li>
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
        <div class="card ">
          <div class="card-body">
            <h5>Buat Data Pegawai</h5>
            <a href="/admin/pegawai">Kembali</a>
            <form action="/admin/save" method="post">
              <?= csrf_field(); ?>
              <div class="card card-primary">
                <div class="card-body">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" id="nama" name="username" class="form-control form-control-border border-width-2 col-md-10" placeholder="Nama Pegawai" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Katasandi</label>
                    <input type="password" id="tahun" name="katasandi" class="form-control form-control-border border-width-2 col-md-10" placeholder="katasandi" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Level</label>
                    <select name="level" id="level" class="form-control">
                      <option value="Admin">Admin</option>
                      <option value="Petugas">Petugas</option>
                    </select>
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