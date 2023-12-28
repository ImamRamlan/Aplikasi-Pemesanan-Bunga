<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Bunga</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data Bunga</a></li>
                    <li class="breadcrumb-item active">List Bunga</li>
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
                        <?php if (isset($success)) : ?>
                            <div class="alert alert-success">
                                <?= $success ?>
                            </div>
                        <?php endif; ?>
                        <a href="/bunga/create" class="btn btn-success mt-3"><i class="fas fa-plus-square"></i> </a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Bunga</th>
                                    <th>Deskripsi</th>
                                    <th>Harga Satuan</th>
                                    <th>Stok</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($bunga as $row) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $row['211170_namabunga']; ?></td>
                                        <td><?= $row['211170_deskripsi']; ?></td>
                                        <td><?= $row['211170_hargasatuan']; ?></td>
                                        <td><?= $row['211170_stok']; ?></td>
                                        <td>
                                        <img src="<?= base_url('uploads/bunga/' . $row['211170_gambar']); ?>" alt="Bunga Image" width="130" height="110">
                                        </td>
                                        <td class="text-center">
                                            <a href="/bunga/edit/<?= $row['211170_idbunga']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                            <a href="/bunga/delete/<?= $row['211170_idbunga']; ?>" class="btn btn-danger" onclick="return confirm ('Apakah anda yakin?');"><i class="fas fa-trash"></i></a>
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
