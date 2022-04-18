@php
    if(!isset($_SESSION['login'])){
        header("Location: /login");
    }
@endphp

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
    <link rel="stylesheet" href="/assets/custom/home/style.css">
    <link rel="stylesheet" href="/assets/custom/beranda/style.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="/assets/icon/Logo.png" type="image/x-icon">
    


    <title>{{ $title }} | HOSPIRESC</title>
</head>
<body>
    <hr style="color: white">
    @yield('content')
    
    <!-- Optional JavaScript -->
    <script src="/assets/bootstrap/js/bootstrap.js"></script>
    <script src="/assets//bootstrap/js/popper.min.js"></script>
    
</body>
</html>