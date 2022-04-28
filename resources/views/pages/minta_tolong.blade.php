@extends('layouts.kontak')

@include('partials.navbar2')

@section('content')

<style>
  .container {
    font-family: 'PT Serif';
    font-style: normal;
    font-weight: 900;
    font-size: 48px;
    line-height: 64px;
    display: flex;
    align-items: center;
    text-align: center;
    color: #FFFFFF;
}

label {

font-family: 'PT Serif';
font-style: normal;
font-weight: 700;
font-size: 36px;
line-height: 48px;
}

input {

width: 676px;
height: 74px;
left: 338px;
top: 523px;
font-family: 'PT Serif';
font-style: normal;
font-weight: 700;
font-size: 32px;
line-height: 36px;

background: #FFFFFF;
border-radius: 10px;
}
</style>
<!-- Heading -->
<div class="ms-1" style="width: 50%;">
    <h2 class="text-bold text-light title" >MINTA TOLONG</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-left">
<!-- formulir -->
<form action="/login" method="POST">
  <div class="text-start">
  @csrf
    <label for="JudulPertolongan">Judul Pertolongan</label><br>
    <input type="text"  id="JudulPertolongan" ><br>
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    <label for="DeskripsiPertolongan">Deskripsi Pertolongan</label><br>
    <input type="text"  id="DeskripsiPertolongan"><br>
    <label for="PilihAlatMedis" >Pilih Alat Medis Yang Dibutuhkan</label><br>
    <select class="form-control ">
          <option></option>
          <option>option1</option>
          <option>option2</option>
          <option>option3</option>
          <option>option4</option>
          <option>option5</option>
          <option>option6</option>
          <option>option7</option>
          <option>option8</option>
          <option>option1</option>
          <option>option2</option>
          <option>option3</option>
          <option>option4</option>
          <option>option5</option>
          <option>option6</option>
          <option>option7</option>
          <option>option8</option>
    </select>
     
    <div class="mb-3" class="text-right"> 
    <button type="button" class="btn btn-lg text-tombol" style="background: #A1C4FD;">Konfirmasi</button></a>
    </div>
<!-- 
      <div class="mb-3" class="text-right">
    <button type="submit" class="btn btn-primary">Konfirmasi</button>
  </div> -->
  
</form>

@endsection