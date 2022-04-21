
@extends('layouts.beranda')

@include('partials.navbar2')


@section('content')
    <!-- Add your site or application content here -->
    <div class="container mt-2 gambarAwal">
        <div class="gambar">
            <img src="assets/images/kumpulan-doctor-removebg-preview.png" width="1000" class="rounded float-start" alt="tes">
        </div>

        <!-- Add explanation right side of the image -->
        <div class="container mt-4 ms-auto">
            <div class="text-center">
                <h1>SELAMAT DATANG!</h1>
                <div class="text-center">
                    <h4>Lakukan Pengajuan Kebutuhan <br> Yang Anda Perlukan!</h4>
                </div>
                <br>
                <div class="text-center">
                    <p class="groove">
                        Working Hours
                        <br>
                        Senin-Jum’at: 09.00-17.00<br>
                        Sabtu-Minggu: 10.30-15.00
                    </p>
                    <br>
                    <!-- Button for Log In -->
                    <div class="text-center">
                        <a href="/mengajukan"><button type="button">
                                <div class="text-ajukan">
                                    Ajukan
                                </div>
                            </button>
                        </a>
                        </h6>
                        <!-- End Of Button for Log In -->
                    </div>
                    <!-- Button trigger modal -->
                </div>
            </div>
        </div>
    </div>
@endsection
