<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
        <h3>Data Pesanan</h3>
        <a href="/datapesanan">Kembali</a>
          <div class="card">
            <div class="card-body">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Pelanggan</label>
                            <input type="text" id="nama" name="nama_kendaran" class="form-control form-control-border border-width-2 col-md-10" placeholder="Niki" required autofocus disabled>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Pesanan</label>
                            <input type="text" id="tahun" name="waktumulai" class="form-control form-control-border border-width-2 col-md-10" placeholder="25-03-2023" required autofocus disabled>
                        </div>
                        <div class="form-group">
                            <label>Status Pesanan</label>
                            <input type="text" id="tahun" name="waktuakhir" class="form-control form-control-border border-width-2 col-md-10" placeholder="Dalam Proses" required autofocus disabled>
                        </div>
                        <div class="form-group">
                            <label>Total Harga</label>
                            <input type="int" id="tahun" name="nama_kendaran" class="form-control form-control-border border-width-2 col-md-10" placeholder="15000" required autofocus disabled>
                        </div>                        
                    </div>
                </div>
            </form>
            </div>
          </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>