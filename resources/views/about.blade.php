@extends('layouts.about')

@include('partials.navbar')


@section('content')

{{-- Page Title --}}
<div class="about-section">
    <h1>TENTANG KAMI</h1>
  </div>
{{-- End of Page Title --}}
  
{{-- Up Line --}}
<hr> <hr>
{{-- End of up line --}}

{{-- Content --}}

  <div class="grid">
    <div class="row"> 
      <div class="col-md-2">
        <div class="img"></div> 
          <img src="/assets/images/icut.jpeg" alt="" style="width:100%">   
          <img src="/assets/images/frame-foto.png" alt="" style="width:100%">
        </div>
          <p class="title"></p>
          <p>Nama: Cut Nadilla Maretna</p>
          <p>Umur: 19 Tahun</p>
          <p>Alamat: Jln. Prada</p>
      
        <div class="col-md-2">
          <div class="box"></div> 
          <img src="/assets/images/lala.jpg" alt="" style="width:100%">
          <img src="/assets/images/frame-foto.png" alt="" style="width:100%">
        </div>
          <p class="title"></p>
          <p>Nama: Rahmi Najla</p>
          <p>Umur: 19 Tahun</p>
          <p>Alamat: Jln. Elang</p>
      
        <div class="col-md-2">
          <div class="box"></div> 
          <img src="/assets/images/upak.jpeg" alt="" style="width:100%">
          <img src="/assets/images/frame-foto.png" alt="" style="width:100%">
        </div>
            <p class="title"></p>
            <p>Nama: Ulfa Rahmah</p>
            <p>Umur: 19 Tahun</p>
            <p>Alamat: Jln. Elang</p>
    </div>
 
    <div class="row">
        <div class="col-md-2">
          <div class="box"></div> 
          <img src="/assets/images/abdul.jpeg" alt="" style="width:100%">
          <img src="/assets/images/frame-foto.png" alt="" style="width:100%">
        </div>
            <p class="title"></p>
            <p>Nama: Abdul Hafidh</p>
            <p>Umur: 19 Tahun</p>
            <p>Alamat: Jln. </p>

        <div class="col-md-2">
          <div class="box"></div> 
          <img src="/assets/images/faiz.jpeg" alt="" style="width:100%">
          <img src="/assets/images/frame-foto.png" alt="" style="width:100%">
        </div>
            <p class="title"></p>
            <p>Nama: Faiz Dzakirullail</p>
            <p>Umur: 19 Tahun</p>
            <p>Alamat: Jln. </p>            
    </div>
  </div>
  {{-- End of content --}}
    
{{-- Bottom Line --}}
<hr> <hr>
{{-- End of bottom line --}}
      
      

    
@endsection