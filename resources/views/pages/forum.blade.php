@extends('layouts.pertolongan')

@include('partials.navbar2')

@section('content')
    <div class="ms-5" style="width: 70%;">
        <h1 class="text-bold text-dark title">FORUM PERTOLONGAN</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="mt-5">
                   <!-- Kita akan menggunnakan perulangan disini sesuai dengan jumlah data yang ada di database -->
                    <div class="card w-75">
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="card-title">Rs Umum</h5>
                            </div>
                            <p class="card-text">
                                Judul Pertolongan: <br>
                                Alat Medis yang dibutuhkan: <br>
                            </p>
                            <div class="text-end">
                                <a href="#" class="btn btn-primary">Tolong</a>
                            </div>
                        </div>
                    </div><br>
                    <!-- dan disini adalah akhir dari perulangan -->
                   
                </div>
            </div>
            <!-- Image right side -->
            <div class="col-md-6">
                <figure class="figure">
                    <img src="/assets/images/doctor.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                    <figcaption class="figure-caption text-right"></figcaption>
                  </figure>
            </div>
        </div>
    </div>
@endsection
