<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Pelanggan </title>
  <style>
    .bg-login {
      background: url(../../assets/img/api/bunga.jpg);
      width: 100%;
      height: 100vh;
      background-size: cover;
      position: relative;
    }
  </style>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="bg-login">
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <form action="/loginpelanggan/log" method="post">
                <h3 class="mb-5">Masuk</h3>

                <div class="form-outline mb-4">
                  <input type="text"class="form-control form-control-lg" placeholder="Username" name="211170_username" />
                </div>

                <div class="form-outline mb-4">
                  <input type="password" class="form-control form-control-lg" placeholder="Kata Sandi" name="211170_katasandi"/>
                </div>

                <!-- Checkbox -->
                <a href="/registrasi">Belum punya akun?<i class="fas fa-user"></i></a>
                <div class="d-flex justify-content-start mb-4">
                  <button class="btn btn-primary btn-block btn-lg" type="submit">Login</button>
                </div>
                

                <hr class="my-4">
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>