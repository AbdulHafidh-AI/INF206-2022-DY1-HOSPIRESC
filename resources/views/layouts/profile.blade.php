<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <!-- custom CSS -->

    <!-- title -->
    <title>{{ title }} | HOSPIRESC</title>
</head>
<body>

    @include('partials.navbar2')

    @yield('content')
    
</body>
</html>