@extends('layouts.template')


@include('partials.navbar')

@section('content')
    <!--Text Center -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <!-- Heading -->
                    <h1 class="text-center">LOGIN</h1>
                    <h3 class="text-center">Login dengan Kode Rumah Sakit</h3>
                    <!-- Login Form -->
                    <form action="/login" method="POST">
                        <div class="text-start">
                            @csrf
                            <label for="kode_user">Kode Rumah Sakit</label><br>
                            <input type="text" name= "kode_user" id="kode_user" autofocus required><br>
                            <label for="password">Password</label><br>
                            <input type="password" name="password" id="password" required>
                        </div>
                        <!-- End of Login Form -->
                        <!-- Button for Log In -->
                        <div>
                            
                        </div>
                        <div class="text-center">
                            <br>
                            <button type="submit">Login</button>
                    </form>
                    <br>
                    <h6>Terjadi masalah ketika login? <a href="/kontak"> <span id="Hubungi"> Hubungi Kami</span> </a>
                    </h6>
                    <!-- End Of Button for Log In -->
                </div>
            </div>
        </div>
    </div>
@endsection
