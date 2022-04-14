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
                    <div class="text-start">
                        <form action="/" method="POST">
                            @csrf
                            <label for="username">Kode Rumah Sakit</label><br>
                            <input type="text" id="username" name="username"><br>
                            <label for="pwd">Password</label><br>
                            <input type="password" id="pwd" name="pwd">
                        </form>
                    </div>
                    <!-- End of Login Form -->
                    <!-- Button for Log In -->
                    <div class="text-center">
                        <button type="button">Log In</button>
                        <br>
                        <h6>Terjadi masalah ketika login? <a href="/kontak"> <span id="Hubungi"> Hubungi Kami</span> </a></h6>
                    </div>
                </div>
            </div>
        </div>
    @endsection
