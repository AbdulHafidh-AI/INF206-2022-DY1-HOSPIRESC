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
    <link rel="stylesheet" href="/assets/custom/beranda/style.css">
    <link rel="stylesheet" href="/assets/custom/navbar.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="/assets/icon/Logo.png" type="image/x-icon">
    
    <style>
    .hero-image {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("/assets/images/background-rumah-sakit.jpg");
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }
    </style>

    <title>{{ $title }} | HOSPIRESC</title>
</head>
<body>
    <hr style="color: white">

    <div class="hero-image">
        @yield('content')
      </div>
    
    <!-- Optional JavaScript -->
    <script src="/assets/bootstrap/js/bootstrap.js"></script>
    <script src="/assets//bootstrap/js/popper.min.js"></script>
    
</body>
</html>