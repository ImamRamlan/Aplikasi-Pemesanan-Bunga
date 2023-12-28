<?= $this->extend('templatess/index'); ?>

<?= $this->section('page'); ?>
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Detail Bunga</h2>
            <ol>
                <li><a href="/lihat_bunga">Home</a></li>
                <li>Detail Bunga</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="<?= base_url('uploads/bunga/' . $bunga['211170_gambar']); ?>"alt="...">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Informasi Bunga</h3>
                    <ul>
                        <li><strong>Nama Bunga</strong>: <?= $bunga['211170_namabunga'] ?></li>
                        <li><strong>Harga Satuan</strong>: <?= $bunga['211170_hargasatuan'] ?></li>
                        <li><strong>Stok</strong>: <?= $bunga['211170_stok'] ?></li>

                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2>Deskripsi</h2>
                    <p>
                    <?= $bunga['211170_deskripsi'] ?>
                    </p>
                </div>
                <a href="/lihat_bunga/pesan/<?= $bunga['211170_idbunga']; ?>" class="btn btn-success">Pesan</a>
            </div>

        </div>

    </div>
</section><!-- End Portfolio Details Section -->
<?= $this->endSection(); ?>