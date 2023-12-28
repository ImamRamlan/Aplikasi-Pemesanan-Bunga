<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Data Pegawai</h1>
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
            <h5>List Data Pegawai</h5>
            <a href="/admin/create" class="btn btn-success mt-3">Tambah Data </a>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Username</th>
                  <th scope="col">Kata Sandi</th>
                  <th scope="col">Level</th>
                  <th colspan="3" class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($datapegawai as $ds) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $ds['211170_username']; ?></td>
                    <td><?= $ds['211170_katasandi']; ?></td>
                    <td><?= $ds['211170_level']; ?></td>
                    <td class="text-center">
                      <a href="/admin/edit/<?= $ds['211170_idadmin'];?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                      <a href="/admin/delete/<?= $ds['211170_idadmin'];?>" class="btn btn-danger" onclick="return confirm ('apakah anda yakin?');"><i class="fas fa-trash"></i></a>
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