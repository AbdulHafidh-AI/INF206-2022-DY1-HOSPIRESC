@extends('layouts.about')

@include('partials.navbar2')


@section('content')

{{-- Page Title --}}
<div class="about-section">
    <h1>TENTANG KAMI</h1>
  </div>
{{-- End of Page Title --}}

{{-- Content --}}
<div class="container">
<div class="row justify-content-evenly">
  <div class="col-md-3">
    <div class="thumbnail">
        <img src="/assets/images/cut.jpeg" alt="" style="width:100%">
        <div class="caption">
          <p> </p>
          <p>Nama: Cut Nadilla Maretna</p>
          <p>Umur: 19 Tahun</p>
          <p>Alamat: Jln. Prada</p>
        </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="thumbnail">
        <img src="/assets/images/lala.jpeg" alt="" style="width:100%">
        <div class="caption">
          <p> </p>
          <p>Nama: Rahmi Najla</p>
          <p>Umur: 19 Tahun</p>
          <p>Alamat: Jln. Elang</p>
        </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="thumbnail">
        <img src="/assets/images/upa.jpeg" alt="" style="width:100%">
        <div class="caption">
          <p> </p>
          <p>Nama: Ulfa Rahmah</p>
          <p>Umur: 19 Tahun</p>
          <p>Alamat: Jln. T. Bintara Pineung</p>
        </div>
    </div>
  </div>
 
 <div class="row justify-content-evenly">
    <div class="col-md-3">
      <div class="thumbnail">
          <img src="/assets/images/abdul.jpeg" alt="" style="width:100%">
          <div class="caption">
            <p> </p>
            <p>Nama: Abdul Hafidh</p>
            <p>Umur: 19 Tahun</p>
            <p>Alamat: Jln. Pari</p>
          </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="thumbnail">
          <img src="/assets/images/faiz.jpeg" alt="" style="width:100%">
          <div class="caption">
            <p> </p>
            <p>Nama: Faiz Dzakirullail</p>
            <p>Umur: 19 Tahun</p>
            <p>Alamat: Ulee Lheu</p>
          </div>
      </div>
    </div>
  </div>

  
  <!-- Footer-->
  <footer class="mt-auto">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; HOSPIRESC 2022</p></div>
</footer>

{{-- End of content --}} 
@endsection