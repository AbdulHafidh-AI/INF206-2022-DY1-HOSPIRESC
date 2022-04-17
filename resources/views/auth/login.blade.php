@extends('layouts.template')


@include('partials.navbar')

@section('content')
    <!--Text Center -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <!-- Heading -->
                    <h1 class="text-center">LOG IN</h1>
                    <h3 class="text-center">Log In dengan Kode Rumah Sakit</h3>
                    <!-- Login Form -->
                    <form action="/login" method="POST">
                        <div class="text-start">

                            @csrf
                            <label for="username">Kode Rumah Sakit</label><br>
                            <input type="text" id="username" name="username"><br>
                            <label for="pwd">Password</label><br>
                            <input type="password" id="pwd" name="pwd">
                        </div>
                        <!-- End of Login Form -->
                        <!-- Button for Log In -->
                        <div>
                            
                        </div>
                        <div class="text-center">
                            <br>
                            <button type="submit">Log In</button>
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
