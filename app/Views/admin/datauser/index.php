<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Pelanggan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Beranda Utama</a></li>
                    <li class="breadcrumb-item active">Data Pelanggan</li>
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
                        <h5>List Data Pelanggan</h5>
                        <?php if(session()->getFlashdata('error')) : ?>
                          <div class="card-body col-md-5">
                            <div class="alert alert-danger alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <h5><i class="icon fas fa-ban"></i>Data Pengguna</h5>
                              <?= session()->getFlashdata('error'); ?>
                            </div>
                          </div>
                        <?php endif; ?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Pelanggan</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Kata Sandi</th>
                                    <th scope="col">No Telepon</th>
                                    <th colspan="3" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop through your data to display rows -->
                                <?php foreach ($pelanggan as $row) : ?>
                                    <tr>
                                        <th scope="row"><?= $row['211170_idpelanggan']; ?></th>
                                        <td><?= $row['211170_namapelanggan']; ?></td>
                                        <td><?= $row['211170_username']; ?></td>
                                        <td><?= $row['211170_katasandi']; ?></td>
                                        <td><?= $row['211170_notelp']; ?></td>
                                        <td class="text-center">
                                            <a href="/datauser/edit/<?= $row['211170_idpelanggan']; ?>"
                                                class="btn btn-warning">Edit</a>
                                            <a href="/datauser/delete/<?= $row['211170_idpelanggan']; ?>"
                                                class="btn btn-danger"
                                                onclick="return confirm ('Apakah Anda yakin?');">Hapus</a>
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
