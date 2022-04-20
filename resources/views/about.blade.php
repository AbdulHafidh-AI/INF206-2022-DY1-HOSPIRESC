@extends('layouts.about')

@include('partials.navbar')


@section('content')

{{-- Page Title --}}
<div class="about-section">
    <h1>TENTANG KAMI</h1>
  </div>
{{-- End of Page Title --}}
  
{{-- Content --}}
<div class="row justify-content-md-center">
<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/assets/images/cut.jpeg" >
        <img src="/assets/images/cut.jpeg" alt="" style="width:100%">
        <div class="caption">
          <p>Nama: Cut Nadilla Maretna</p>
          <p>Umur: 19 Tahun</p>
          <p>Alamat: Jln. Prada</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/assets/images/lala.jpeg">
        <img src="/assets/images/lala.jpeg" alt="" style="width:100%">
        <div class="caption">
          <p>Nama: Rahmi Najla</p>
          <p>Umur: 19 Tahun</p>
          <p>Alamat: Jln. Elang</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/assets/images/upa.jpeg">
        <img src="/assets/images/upa.jpeg" alt="" style="width:100%">
        <div class="caption">
          <p>Nama: Ulfa Rahmah</p>
          <p>Umur: 19 Tahun</p>
          <p>Alamat: Jln. T. Bintara Pineung</p>
        </div>
      </a>
    </div>
  </div>
</div>

<p text-center> 
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/assets/images/abdul.jpeg" >
          <img src="/assets/images/abdul.jpeg" alt="" style="width:100%">
          <div class="caption">
            <p>Nama: Abdul Hafidh</p>
            <p>Umur: 19 Tahun</p>
            <p>Alamat: Jln. Pari</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/assets/images/faiz.jpeg">
          <img src="/assets/images/faiz.jpeg" alt="" style="width:100%">
          <div class="caption">
            <p>Nama: Faiz Dzakirullail</p>
            <p>Umur: 19 Tahun</p>
            <p>Alamat: Ulee Lheu</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  </div>
</p>
 
{{-- End of content --}}
@endsection