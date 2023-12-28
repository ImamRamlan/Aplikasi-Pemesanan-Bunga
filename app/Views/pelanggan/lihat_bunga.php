<?= $this->extend('templatess/index'); ?>

<?= $this->section('page'); ?>
<section class="portfolio bg-perpustakaan">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Jenis Bunga</h2>
            <p>Daftar Bunga</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <h3>Bunga</h3>
            </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <?php foreach ($bunga as $row) : ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url('uploads/bunga/' . $row['211170_gambar']); ?>" class="img-fluid" alt="">

                        <div class="portfolio-info">
                            <h4><?= $row['211170_namabunga']; ?></h4>
                            <p><?= $row['211170_hargasatuan']; ?></p>
                            <div class="portfolio-links">
                                <a href="/lihat_bunga/detail/<?= $row['211170_idbunga']; ?>" title="Detail Lelang">
                                    <i class="bx bx-link"></i>
                                    <span style="font-size: 18px;"><i>Pesan Bunga!</i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>