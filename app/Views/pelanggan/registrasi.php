<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laman | Registrasi</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="/register" class="h1"><b>Pemesanan<br></b>Bunga Online</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Buat akun baru untuk memulai sesi anda.</p>
                <?php if (session()->getFlashdata('success')) : ?>
                    <h5><i class="icon fas fa-check"></i><?= session()->getFlashdata('success'); ?></h5>
                <?php endif; ?>
                <?php if (session()->getFlashdata('validation')) : ?>
                    <h5><i class="icon fas fa-ban"></i> Registrasi Anda.</h5>
                    <?php
                    $validation = session()->getFlashdata('validation');
                    foreach ($validation->getErrors() as $error) {
                        echo '<p>' . $error . '</p>';
                    }
                    ?>
                <?php endif; ?>
                <form action="/registrasi/save" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="211170_namapelanggan" value="<?= old('211170_namapelanggan') ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username anda." name="211170_username" value="<?= old('211170_username') ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <textarea class="form-control" placeholder="Alamat Anda" name="211170_alamat" id="floatingTextarea2"><?= old('211170_alamat') ?></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Kata sandi." name="211170_katasandi" minlength="8">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Nomor Telepon Anda." name="211170_notelp">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="input-group mb-3">
                        <select class="form-control" name="212369_jeniskelamin">
                            <option> Pilih Jenis Kelamin</option>
                            <option value="Laki">Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div> -->

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <a href="/loginpelanggan" class="text-center">Sudah punya akun?<i class="fas fa-user"></i></a>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>/dist/js/adminlte.min.js"></script>
</body>

</html>