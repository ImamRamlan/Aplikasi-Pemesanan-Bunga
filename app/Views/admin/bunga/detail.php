<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
        <h3>Data Bunga</h3>
        <a href="/databunga">Kembali</a>
          <div class="card">
            <div class="card-body">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Bunga</label>
                            <input type="text" id="nama" name="nama_kendaran" class="form-control form-control-border border-width-2 col-md-10" placeholder="Mawar" required autofocus disabled>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" id="tahun" name="waktumulai" class="form-control form-control-border border-width-2 col-md-10" placeholder="Mawar, Merah Melana" required autofocus disabled>
                        </div>
                        <div class="form-group">
                            <label>Harga Satuan</label>
                            <input type="text" id="tahun" name="waktuakhir" class="form-control form-control-border border-width-2 col-md-10" placeholder="10000" required autofocus disabled>
                        </div>
                        <div class="form-group">
                            <label>Satuan</label>
                            <input type="int" id="tahun" name="nama_kendaran" class="form-control form-control-border border-width-2 col-md-10" placeholder="Tangkai" required autofocus disabled>
                        </div>                        
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="int" id="tahun" name="nama_kendaran" class="form-control form-control-border border-width-2 col-md-10" placeholder="mawar.png" required autofocus disabled>
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