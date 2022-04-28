@extends('layouts.kontak')

@include('partials.navbar2')

@section('content')

<style>
  h2 {
    font-weight: 900;
    font-family: 'arial, sans-serif';
    margin-bottom: 78px;
}
label {

font-family: 'arial, sans-serif';
font-style: normal;
font-weight: 700;
font-size: 36px;
line-height: 65px;
}

input {

width: 676px;
height: 50px;
left: 338px;
top: 523px;
font-family: 'arial, sans-serif';
font-style: normal;
font-weight: 700;
font-size: 20px;
line-height: 10px;
background: #FFFFFF;
border-radius: 15px;
}

select{
  margin-right: 500px;
  width: 676px;
}
button{
  margin-top: 30px;
  margin-left: 850px;
}
</style>
<!-- Heading -->
<div class="ms-1" style="width: 50%;">
    <h2 class="text-bold text-light title" >MINTA TOLONG</h2>
</div>

<div class="container" >
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
              
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
    <select class="form-control" id="PilihAlatMedis">>
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

  </div>

    <div class="text-right"> 
    <button type="button" class="btn btn-lg text-tombol" class="btn pull-right" style="background: #A1C4FD;">Konfirmasi</button>
    </div>

</form>

@endsection