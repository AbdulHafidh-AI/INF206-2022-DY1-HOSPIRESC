@extends('layouts.home')

@include('partials.navbar')


@section('content')

{{-- Page Title --}}
<div class="about-section">
    <h1>TENTANG KAMI</h1>
  </div>
{{-- End of Page Title --}}
  

{{-- Content --}}

  <div class="grid">
    <div class="row"> 
      <div class="col-md-3">
        <div class="box"></div> 
          <img src="/assets/images/icut.jpeg" alt="" style="width:100%">
        </div>
          <p class="title"></p>
          <p>Nama: Cut Nadilla Maretna</p>
          <p>Umur: 19 Tahun</p>
          <p>Alamat: Jln. Prada</p>
      
        <div class="col-md-3">
          <div class="box"></div> 
          <img src="/assets/images/lala.jpg" alt="" style="width:100%">
        </div>
          <p class="title"></p>
          <p>Nama: Rahmi Najla</p>
          <p>Umur: 19 Tahun</p>
          <p>Alamat: Jln. Elang</p>
      
        <div class="col-md-3">
          <div class="box"></div> 
          <img src="/assets/images/upak.jpeg" alt="" style="width:100%">
        </div>
            <p class="title"></p>
            <p>Nama: Ulfa Rahmah</p>
            <p>Umur: 19 Tahun</p>
            <p>Alamat: Jln. Elang</p>
    </div>
 
    <div class="row">
        <div class="col-md-3">
          <div class="box"></div> 
          <img src="/assets/images/abdul.jpeg" alt="" style="width:100%">
        </div>
            <p class="title"></p>
            <h3>Nama: Abdul Hafidh</h3>
            <h3>Umur: 19 Tahun</h3>
            <h3>Alamat: Jln. </h3>

        <div class="col-md-3">
          <div class="box"></div> 
          <img src="/assets/images/faiz.jpeg" alt="" style="width:100%">
        </div>
            <p class="title"></p>
            <h3>Nama: Faiz Dzakirullail</h3>
            <h3>Umur: 19 Tahun</h3>
            <h3>Alamat: Jln. </h3>            
    </div>
  </div>
  {{-- End of content --}}
    
          
      

    
@endsection