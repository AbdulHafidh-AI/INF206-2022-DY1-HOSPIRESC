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
    <link rel="stylesheet" href="/assets/custom/pertolongan.css">
    <link rel="stylesheet" href="/assets/custom/navbar.css">
    <link rel="stylesheet" href="/assets/custom/info.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    


    <title>{{ $title }} | HOSPIRESC</title>
</head>
<body class="d-flex flex-column min-vh-100">
    @include('sweetalert::alert')
    @yield('content')

   
    
    
    
    <!-- Optional JavaScript -->
    <script src="/assets/bootstrap/js/bootstrap.js"></script>
    <script src="/assets//bootstrap/js/popper.min.js"></script>
    <!--Sweetalert2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


    
    
</body>
</html>