
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset ('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset ('assets/img/logo_dharma.png') }}">
  <title>
    PT DHARMA TEKNO INDONESIA
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset ('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset ('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset ('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset ('assets/css/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet" />
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="{{ route ('landing.page') }}">
        PT DHARMA TEKNO INDONESIA
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="{{ route ('landing.page') }}">
              <i class="fa fa-home opacity-6  me-1"></i>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="{{ route ('auth.register.page') }}">
              <i class="fas fa-user-circle opacity-6  me-1"></i>
              Sign Up
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="{{ route ('auth.login.page') }}">
              <i class="fas fa-key opacity-6  me-1"></i>
              Sign In
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <main class="main-content  mt-0">
    <section class="min-vh-100 mb-8">
      <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved7.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
              <h3 class="text-white mb-2 mt-5">Buat akun disini!</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
          <div class="col-xl-8 col-lg-8 col-md-8 mx-auto">
            <div class="card z-index-0">
              <div class="card-header text-center pt-4">
                <h5>Buat akun</h5>
              </div>
              <div class="card-body">
                <form class="row" role="form text-left" action="{{ route ('auth.register.user') }}"  method="POST">
                    @csrf
                  <div class="col-12 col-lg-6 mb-3">
                    <label for="nama-depan">Nama Depan</label>
                    <input type="text" class="form-control" id="nama-depan" name="nama_depan" placeholder="Masukan nama depan" aria-label="Nama Depan" aria-describedby="nama-depan-addon">
                  </div>
                  <div class="col-12 col-lg-6 mb-3">
                    <label for="nama-belakang">Nama Belakang</label>
                    <input type="text" class="form-control" id="nama-belakang" name="nama_belakang" placeholder="Masukan nama belakang" aria-label="Nama Belakang" aria-describedby="nama-belakang-addon">
                  </div>
                  <div class="col-12 mb-3">
                    <label for="">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email" name="email" aria-label="Email" aria-describedby="email-addon">
                  </div>
                  <div class="col-12 mb-3">
                    <label for="">Phone</label>
                    <input type="number" class="form-control" placeholder="Enter Your Number Phone" name="phone" aria-label="Phone" aria-describedby="phone-addon">
                    <div id="emailHelp" class="form-text">Example number: 852xxxxxxx</div>
                  </div>
                  <div class="col-12 col-lg-6 mb-3">
                    <label for="">Password</label>
                    <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password" aria-describedby="password-addon">
                    <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
                  </div>
                  <div class="col-12 col-lg-6 mb-3">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Confirm Password" aria-label="Password" name="password_confirmation" aria-describedby="confirm-password-addon">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                  </div>
                  <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{ route ('auth.login.page') }}" class="text-dark font-weight-bolder">Sign in</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-4 mx-auto text-center">
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Company
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              About Us
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Contact Us
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Sign In
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Sign Up
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Started
            </a>
          </div>
          <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
              <span class="text-lg fab fa-dribbble"></span>
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
              <span class="text-lg fab fa-twitter"></span>
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
              <span class="text-lg fab fa-instagram"></span>
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
              <span class="text-lg fab fa-pinterest"></span>
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
              <span class="text-lg fab fa-github"></span>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
              Copyright © <script>
                document.write(new Date().getFullYear())
              </script> PT DHARMA TEKNO INDONESIA.
            </p>
          </div>
        </div>
      </div>
    </footer>
  </main>
  <!--   Core JS Files   -->
  <script src="{{ asset ('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset ('assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset ('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset ('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="{{ asset ('assets/js/soft-ui-dashboard.min.js?v=1.0.7') }}"></script>
</body>

</html>