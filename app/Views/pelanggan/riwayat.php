<?= $this->extend('templatess/index'); ?>

<?= $this->section('page'); ?>
<section class="d-flex align-items-center justify-content-center bg-perpustakaan">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <h1 class="text-center">Riwayat Pemesanan</h1>
        </div>

        <?php if (empty($bunga)) : ?>
            <div class="row justify-content-center mt-5">
                <p class="text-center">Anda belum melakukan pesanan apapun.</p>
            </div>
        <?php else : ?>
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success alert-dismissible col-md-5">
                    <h5><i class="icon fas fa-check"></i><?= session()->getFlashdata('success'); ?></h5>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-success alert-dismissible col-md-5">
                    <h5><i class="icon fas fa-check"></i><?= session()->getFlashdata('error'); ?></h5>
                </div>
            <?php endif; ?>
            <div class="row gy-4 mt-5 justify-content-lg-between" data-aos="zoom-in" data-aos-delay="250">
                <?php foreach ($bunga as $bunga) : ?>
                    <div class="card card-solid">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="<?= base_url('uploads/bunga/' . $bunga['211170_gambar']); ?>" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-sm-8">
                                    <h3 class="my-3"><?= $bunga['211170_namabunga']; ?></h3>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Harga</b> <a class="float-right">Rp. <?= $bunga['211170_hargasatuan']; ?>.</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Stok</b> <a class="float-right"><?= $bunga['211170_stok']; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Status Pesanan</b> <a class="float-right"><?= $bunga['211170_statuspesanan']; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Total Harga</b> <a class="float-right"><?= $bunga['211170_totalharga']; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Tanggal Pesanan</b> <a class="float-right"><?= $bunga['211170_tanggalpesanan']; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b><a href="/pesan/bayar/<?= $bunga['211170_idpesanan']; ?>" class="btn btn-primary">Bayar</a></b>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?= $this->endSection(); ?>