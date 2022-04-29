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
  
    <link rel="stylesheet" href="/assets/custom/navbar.css">
    <link rel="stylesheet" href="/assets/custom/profile/profile.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="/assets/icon/Logo.png" type="image/x-icon">
    

    <title>{{ $title }} | HOSPIRESC</title>
</head>
<body>

 
    <div class="hero-image">
      <div class="ms-5" style="width: 70%;">
        <h1 class="text-white">MINTA TOLONG</h1>
      </div>

        @yield('content')
      </div>
    
    <!-- Optional JavaScript -->
    <script src="/assets/bootstrap/js/bootstrap.js"></script>
    <script src="/assets//bootstrap/js/popper.min.js"></script>
    
</body>
</html>