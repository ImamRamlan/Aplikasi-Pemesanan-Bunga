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
          <div class="card ">
            <div class="card-body">
            <h5>Edit Data Pesanan</h5>
            <a href="/datapesanan/index">Kembali</a>
            <form action="/datapesanan/save" method="post">
                <?=csrf_field();?>
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Pelanggan</label>
                            <input type="text" id="nama" name="nama_kendaran" class="form-control form-control-border border-width-2 col-md-10" placeholder="Nama Pesanan" required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Pesanan</label>
                            <input type="date" id="tahun" name="waktumulai" class="form-control form-control-border border-width-2 col-md-10" placeholder="Nama Pengguna" required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Status Pesanan</label>
                            <select name="" class="form-control col-md-6">
                            <option>Dalam Proses</option>
                            <option value="">Dikirim</option>
                            <option value="">Selesai</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Total Harga</label>
                            <input type="int" id="tahun" name="waktuakhir" class="form-control form-control-border border-width-2 col-md-10" placeholder="Total Harga" required autofocus>
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