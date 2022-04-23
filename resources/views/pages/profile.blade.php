@extends('layouts.profile')

@include('partials.navbar2')

@section('content')
    <div class="profilscreen">
        <div class="background">
            <h1 class="title">PROFIL</h1>
            <div class="background1">
                <div class="nama_rs">Rumah Sakit Sejahtera</div>
                <div class="bingkai"></div>
                <img class="hospital-1" src="/public/assets/images/profil-rumah-sakit.jpeg" />
                <div class="noizin">
                    No Izin : 007955009
                </div>
                <div class="alamat">
                    Alamat : Jln. Ismalil Marzuki, No.7, Padang
                </div>
                <div class="email">
                    Email : rssejahtera@gmail.com
                </div>
                <div class="notelp">
                    No. Telp : +62 813-1434-4308
                </div>
            </div>
        </div>
    </div>
@endsection
