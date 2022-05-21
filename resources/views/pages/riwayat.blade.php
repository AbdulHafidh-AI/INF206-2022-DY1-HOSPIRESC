@extends('layouts.riwayat')

@include('partials.navbar2')

@section('content')

<!-- Header -->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">RIWAYAT PERTOLONGAN</h1>
            <p class="lead fw-normal text-white-50 mb-0">Silahkan Menolong Kebutuhan Rumah Sakit Lain</p>
        </div>
    </div>
  </header>
  <!-- End of Header -->

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="mt-5">
               <!-- Kita akan menggunnakan perulangan disini sesuai dengan jumlah data yang ada di database -->
               @foreach ($riwayat as $r)
               <div class="card w-75">
                <!-- Menyesuaikan label dengan foreign key -->
                @if (($r->category->user_id == $_SESSION['id']))
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Milik Anda</div>
                @endif
                <div class="card-body">
                    <div class="text-center">
                        <!-- Membuat nama sesuai dengan foreign key yang ada pada tabel users -->
                        <h5 class="card-title">{{ $r->category->user->name }}</h5>
                    </div>
                    <p class="card-text">
                        Judul Pertolongan: {{ $r->category->title }} <br>
                        Alat Medis yang dibutuhkan: {{ $r->category->item_name }} <br>
                    </p>
                    <div class="text-end">
                        <a href="/pages/detail/{{ $r->id }}" class="btn btn-success">Detail pertolongan</a>
                    </div>
                </div>
            </div><br>   
             @endforeach
                
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

 <!-- Footer-->
 <footer class="py-5 bg-dark mt-auto">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; HOSPIRESC 2022</p></div>
</footer>

@endsection