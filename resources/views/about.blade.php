@extends('layouts.home')

@include('partials.navbar')


@section('content')

<div class="about-section">
    <h1>TENTANG KAMI</h1>
  </div>
  
  <div class="row">
    <div class="column">
      <div class="card">    
        <div class="container">
            <div> class="col-md-4">
            <img src="/assets/images/icut.jpeg" alt="" style="width:100%">
          <h3>Nama: Cut Nadilla Maretna</h3>
          <h3>Umur: 19 Tahun</h3>
          <h3>Alamat: Jln. Prada</h3>

            </div>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="/assets/image/lala.jpg" alt="Mike" style="width:100%">
        <div class="container">
          <h2>Mike Ross</h2>
          <p class="title">Art Director</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>mike@example.com</p>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="/assets/image/upak.jpeg" alt="John" style="width:100%">
        <div class="container">
          <h2>John Doe</h2>
          <p class="title">Designer</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>john@example.com</p>
        </div>
      </div>
    </div>
  </div>
    
@endsection