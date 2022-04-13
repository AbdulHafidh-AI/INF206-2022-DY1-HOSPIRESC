<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">


    <!-- Custom CSS -->

    <link rel="stylesheet" href="/assets/custom/template/style.css">
    <link rel="stylesheet" href="/assets/custom/login/style.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="/assets/icon/Logo.png" type="image/x-icon">
    


    <title>{{ $title }} | HOSPIRESC</title>
</head>
<body>

    {{-- <!-- Navbar -->
     <nav class="navbar navbar-dark navbar-expand-lg fixed-top clean-navbar" style="background-color: #2F303A">
        <div class="container">
            <a class="navbar-brand mb-o h1" href="#" >
            <img src="/assets/icon/Logo.png" alt="" width="50" height="44" class="d-inline-block align-text-top">
            <b>HOSPIRESC</b>
          </a>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">BERANDA</a></li>
                    <li class="nav-item align-content-lg-center"><a class="nav-link" href="#">TENTANG <br> KAMI</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">KONTAK</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">LOG IN</a></li>
                </ul>
            </div>
        </div>
    </nav>
      <!-- End Of Navbar --> --}}
        <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2F303A">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="/assets/icon/Logo.png" alt="" width="50" height="45" class="d-inline-block align-text-top">
        HOSPIRESC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="#">BERANDA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">TENTANG <br> KAMI </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">KONTAK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active"  href="#"> <span class="{{ $title == "Login" ? 'blue' : '' }}"> LOG IN </span> </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Of Navbar-->

    
      <div class="hero-image">
        <div class="hero-text">
          @yield('content')
        </div>
      </div>
    <!-- Optional JavaScript -->
    <script src="/assets/bootstrap/js/bootstrap.js"></script>
    <script src="/assets//bootstrap/js/popper.min.js"></script>
    
</body>
</html>