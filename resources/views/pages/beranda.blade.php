
@extends('layouts.beranda')

@include('partials.navbar2')


@section('content')
   <div class="container">
       <div class="container mt-5">
           <div class="row">
               <div class="col-md-8">
                   <img src="assets/images/kumpulan-doctor-removebg-preview.png" class="float-start" alt="tes">
               </div>
               <div class="col-4 text-white">
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
                           
                           <a href="/minta tolong"> <button type="button" class="btn btn-lg" style="background: #A1C4FD;">Ajukan</button></a>
                           
               </div>
             </div>
           </div>
          
       </div>
    
</div>
@endsection
