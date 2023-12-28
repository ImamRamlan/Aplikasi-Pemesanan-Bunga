<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
        <h3>Data Pelanggan</h3>
        <a href="/datauser">Kembali</a>
          <div class="card">
            <div class="card-body">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Pelanggan</label>
                            <input type="text" id="nama" name="nama_kendaran" class="form-control form-control-border border-width-2 col-md-10" placeholder="Niki" required autofocus disabled>
                        </div>
                        <div class="form-group">
                            <label>Nama Pengguna</label>
                            <input type="text" id="tahun" name="waktumulai" class="form-control form-control-border border-width-2 col-md-10" placeholder="Niki123" required autofocus disabled>
                        </div>
                        <div class="form-group">
                            <label>Kata Sandi</label>
                            <input type="text" id="tahun" name="waktuakhir" class="form-control form-control-border border-width-2 col-md-10" placeholder="niki123" required autofocus disabled>
                        </div>
                        <div class="form-group">
                            <label>No Telepon</label>
                            <input type="int" id="tahun" name="nama_kendaran" class="form-control form-control-border border-width-2 col-md-10" placeholder="0123456789" required autofocus disabled>
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