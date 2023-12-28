<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="content-header">
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Generate Laporan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda Utama</a></li>
              <li class="breadcrumb-item active">Generate Laporan</li>
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
          <div class="card ">
            <div class="card-body">
            <h5>List Data Laporan</h5>
            <a href="#" class="btn btn-success">PDF</a>
            <table id="example1" class="table table-bordered table-striped" >
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tanggal Pesanan</th>
                  <th scope="col">Nama Pesanan</th>
                  <th scope="col">Status Pesanan</th>
                  <th scope="col">Total Harga</th>
                  <th scope="col">Total Pembayaran</th>
                  <th scope="col">Tanggal Pembayaran</th>
                </tr>
              </thead>
              <tbody>
        
                <tr>
                  <th scope="row">1</th>
                  <td>1-1-2021</td>
                  <td>Mawar</td>
                  <td>Dalam Proses</td>
                  <td>15000</td>
                  <td>150000</td>
                  <td>25-05-2024</td>
                </tr>
            
              </tbody>
              </table>
              
            </div>
          </div>
        </div>
    </div>
      </div>
    </section>

<?= $this->endSection(); ?>