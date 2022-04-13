@extends('layouts.template')

@section('title', 'Login')

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
                        <form>
                            <label for="username">Kode Rumah Sakit</label><br>
                            <input type="text" id="username" name="username"><br>
                            <label for="pwd">Password</label><br>
                            <input type="password" id="pwd" name="pwd">
                        </form>
                    </div>
                    <!-- End of Login Form -->
                </div>
            </div>
        </div>
        <!-- Login Form -->
    @endsection
