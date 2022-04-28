@extends('layouts.beranda')

@include('partials.navbar2')

@section('content')

<div class="ms-5" style="width: 50%;">
    <h2 class="text-bold text-light title">MINTA TOLONG</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
<!-- formulir -->
<form action="/login" method="POST">
  <div class="text-start">
  @csrf

  
    <label for="JudulPertolongan" class="form-label">JudulPertolongan</label><br>
    <input type="text" class="form-control" id="JudulPertolongan" aria-describedby=" ">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  
  <div class="mb-3">
    <label for="DeskripsiPertolongan" class="form-label">DeskripsiPertolongan</label><br>
    <input type="text" class="form-control" id="DeskripsiPertolongan">
  </div>
</form>

@endsection