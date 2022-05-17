@extends('layouts.pertolongan')

@include('partials.navbar2')



@section('content')
<!-- Header -->
<header class="bg-dark py-5">
  <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
          <h1 class="display-4 fw-bolder">Silahkan Ajukan pertolongan sesuai dengan kebutuhan</h1>
          <p class="lead fw-normal text-white-50 mb-0">Mohon untuk jujur dalam menuliskan deskripsinya!</p>
      </div>
  </div>
</header>
<!-- End of Header -->


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
          <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>

 <!-- Footer-->
 <footer class="py-5 bg-dark mt-auto">
  <div class="container"><p class="m-0 text-center text-white">Copyright &copy; HOSPIRESC 2022</p></div>
</footer>
     
       
@endsection

