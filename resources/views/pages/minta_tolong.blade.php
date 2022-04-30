@extends('layouts.pertolongan')

@include('partials.navbar2')



@section('content')

<div class="ms-5" style="width: 70%;">
  <h1 class="text-dark">MINTA TOLONG</h1>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
       <!-- Formulir -->
       <form action="/pages/minta tolong" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Judul Pertolongan</label>
          <input type="text" class="form-control" name="title" id="title">
        </div>
        
        <div class="form-group">
          <label for="description">Deskripsi</label>
          <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>

        <div class="form-group">
          <label for="item_name">Pilih salah satu alat medis yang dibutuhkan</label>
          <select class="form-control" id="item_name" name="item_name">
              @foreach ($alat_medis as $am)
                <option>{{$am->nama_alat_medis}}</option>  
              @endforeach
          </select>
        </div>
        <br>
        <div class="text-end">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
       
@endsection

