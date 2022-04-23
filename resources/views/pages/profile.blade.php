@extends('layouts.profile')

@include('partials.navbar2')

@section('content')
    <!--Text Center -->
    <div class="container bg-danger">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <div class="container">
                            <div class="bingkai">
                                <h1 class="text-center text-decoration-underline text-white  "> {{ $_SESSION['name'] }} </h1>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="ms-5 mt-5 text-start">
                                                <img src="/assets/images/profil-rumah-sakit.jpeg" alt="profilRumahSakit">
                                        </div>
                                        </div>
                                        <div class="col-md-8 mt-5">
                                            <div class="text-start">
                                                <h3 class="text-white">No IZIN: {{ $_SESSION['no_izin'] }}</h3><br>
                                                <h3 class="text-white">Alamat: {{ $_SESSION['alamat'] }} </h3> <br>
                                                <h3 class="text-white">Email: {{ $_SESSION['email'] }}</h3> <br>
                                                <h3 class="text-white">No Telp: {{ $_SESSION['no_telp'] }} </h3>
                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
