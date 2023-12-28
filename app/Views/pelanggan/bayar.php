<?= $this->extend('templatess/index'); ?>

<?= $this->section('page'); ?>
<section class="d-flex align-items-center justify-content-center bg-perpustakaan">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <h1 class="text-center">Form Pembayaran</h1>
        </div>
        <div class="row gy-4 mt-5 justify-content-lg-between" data-aos="zoom-in" data-aos-delay="250">
            <div class="card">
                <div class="card-header bg-success">
                    <strong class="text-white">Bayar Bunga.</strong>
                </div>
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible col-md-5">
                        <h5><i class="icon fas fa-check"></i><?= session()->getFlashdata('success'); ?></h5>
                    </div>
                <?php endif; ?>
                <div class="card-body">

                    <form action="/pesan/transaksi" method="post">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="">Nama Anda</label>
                                <input type="text" class="form-control" value="<?= session()->get('nama'); ?>" disabled>
                            </div>
                            <div class="col-sm-6">
                                <label for="">Tanggal Pesanan</label>
                                <input type="text" class="form-control" value="<?= $pesan['211170_tanggalpesanan']; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="">Jumlah Pesanan.</label>
                                <input type="text" class="form-control" value="<?= $pesan['211170_jumlah']; ?>" disabled>
                            </div>
                            <div class="col-sm-6">
                                <label for="">Total Harga.</label>
                                <input type="text" class="form-control" value="<?= $pesan['211170_totalharga']; ?>" disabled>
                            </div>
                        </div>

                        <!-- ... (bagian lain dari formulir) ... -->
                        <input type="hidden" class="form-control" name="211170_idpesanan" value="<?= $pesan['211170_idpesanan']; ?>">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="">Tanggal Pembayaran.</label>
                                <input type="date" class="form-control" name="211170_tanggalpembayaran">
                            </div>
                            <div class="col-sm-6">
                                <label for="">Metode Pembayaran.</label>
                                <select name="211170_metode" id="" class="form-control">
                                    <option value="">Pilih Pembayaran</option>
                                    <option value="Cash">Cash</option>
                                    <option value="Kredit">Kredit</option>
                                </select>
                            </div>
                        </div>
                        <?php if ($pesan['211170_statuspesanan'] == 'Selesai') : ?>
                            <div class="alert alert-success">
                                <h5><i class="icon fas fa-exclamation"></i> Pesanan sudah dibayar, Silahkan memesan bunga lain.</h5>
                            </div>
                        <?php elseif ($pesan['211170_statuspesanan'] == 'Dikirim') : ?>
                            <div class="alert alert-warning col-md-5">
                                <h5><i class="icon fas fa-exclamation"></i> Pesanan sudah dikirim!!!.</h5>
                            </div>
                        <?php else : ?>
                            <button class="btn btn-primary" type="submit">Bayar</button>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>