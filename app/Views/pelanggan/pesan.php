<?= $this->extend('templatess/index'); ?>

<?= $this->section('page'); ?>
<section class="d-flex align-items-center justify-content-center bg-perpustakaan">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <h1 class="text-center">Form Pesan Bunga</h1>
        </div>
        <div class="row gy-4 mt-5 justify-content-lg-between" data-aos="zoom-in" data-aos-delay="250">
            <div class="card">
                <div class="card-header bg-success">
                    <strong class="text-white">Pesan Bunga.</strong>
                </div>
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible col-md-5">
                        <h5><i class="icon fas fa-check"></i><?= session()->getFlashdata('success'); ?></h5>
                    </div>
                <?php endif; ?>
                <div class="card-body">
                    <h4><?= $bunga['211170_namabunga']; ?></h4>
                    <form action="/lihat_bunga/bayar" method="post">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="">Nama Anda</label>
                                <input type="hidden" name="211170_idbunga" value="<?= $bunga['211170_idbunga']; ?>">
                                <input type="hidden" name="211170_idpelanggan" value="<?= session()->get('id'); ?>">
                                <input type="text" class="form-control" value="<?= session()->get('nama'); ?>" disabled>
                            </div>
                            <div class="col-sm-6">
                                <label for="">Bunga</label>
                                <input type="text" class="form-control" value="<?= $bunga['211170_namabunga']; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="">Harga Per Tangkai.</label>
                                <input type="text" class="form-control" value="<?= $bunga['211170_hargasatuan']; ?>" disabled>
                            </div>
                            <div class="col-sm-6">
                                <label for="">Jumlah Stok.</label>
                                <input type="text" class="form-control" value="<?= $bunga['211170_stok']; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="">Nominal.</label>
                                <input type="number" class="form-control" placeholder="Masukkan Jumlah bunga." name="211170_jumlah" id="nominalInput">
                            </div>
                            <div class="col-sm-6">
                                <label for="">Total Harga.</label>
                                <input type="number" class="form-control" name="211170_totalharga" disabled id="totalHargaInput">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="">Tanggal Pesan.</label>
                                <input type="date" class="form-control" name="211170_tanggalpesanan" id="tanggalPesan" placeholder="Masukkan nominal bunga.">
                            </div>
                        </div>
                        <?php if ($bunga['211170_stok'] > 0) : ?>
                            <button class="btn btn-primary" type="submit" id="pesanButton">Pesan</button>
                        <?php else : ?>
                            <button class="btn btn-primary" type="button" id="pesanButton" disabled>Pesan</button>
                            <div class="text-danger mt-2">Stok bunga sudah habis. Tidak dapat melakukan pemesanan.</div>
                        <?php endif; ?>
                        <?php if (session()->getFlashdata('error')) : ?>
                            <div class="alert alert-danger alert-dismissible col-md-5">
                                <h5><i class="icon fas fa-check"></i><?= session()->getFlashdata('error'); ?></h5>
                            </div>
                        <?php endif; ?>
                        <a class="btn btn-warning" href="/lihat_bunga/detail/<?= $bunga['211170_idbunga']; ?>">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function updateTotalHarga() {
        const hargaPerTangkai = parseFloat('<?= $bunga['211170_hargasatuan']; ?>');
        const stok = parseInt('<?= $bunga['211170_stok']; ?>');
        const nominal = parseInt(document.getElementById('nominalInput').value) || 0;

        // Memeriksa apakah stok lebih besar dari 0 sebelum menghitung total harga
        if (stok > 0) {
            const totalHarga = hargaPerTangkai * Math.min(stok, nominal);
            document.getElementById('totalHargaInput').value = totalHarga.toFixed(2);
        } else {
            // Jika stok 0, reset input jumlah dan total harga
            document.getElementById('nominalInput').value = '';
            document.getElementById('totalHargaInput').value = '';
        }
    }

    document.getElementById('nominalInput').addEventListener('input', updateTotalHarga);
    document.getElementById('tanggalPesan').valueAsDate = new Date();
    if (stokBunga <= 0) {
        pesanButton.disabled = true;
    }
</script>

<?= $this->endSection(); ?>