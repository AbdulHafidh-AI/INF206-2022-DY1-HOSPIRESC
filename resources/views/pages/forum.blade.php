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
                   @foreach ($pertolongan as $p)
                   <div class="card w-75">
                    <!-- Jika id pertolongan  pada card ini sama dengan id pertolongan yang ada di session maka akan menampilkan card ini -->
                    @if (($p->user_id == $_SESSION['id']))
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Milik Anda</div>
                    @endif
                    <div class="card-body">
                        <div class="text-center">
                            <!-- Membuat nama sesuai dengan foreign key yang ada pada tabel users -->
                            <h5 class="card-title">{{ $p->user->name }}</h5>
                        </div>
                        <p class="card-text">
                            <b>Judul Pertolongan:</b> {{ $p->title }} <br>
                            <b>Alat Medis yang dibutuhkan:</b> {{ $p->item_name }} <br>
                        </p>
                        @if (!($p->user_id == $_SESSION['id']))       
                        <div class="text-end">
                            <!-- Membuat tombol untuk menolong sesuai dengan id pertolongan yang ada pada tabel pertolongan -->
                            <a href="/pages/riwayat/{{ $p->id }}" class="btn btn-primary">Tolong</a>
                        </div>
                        @endif
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
@endsection
