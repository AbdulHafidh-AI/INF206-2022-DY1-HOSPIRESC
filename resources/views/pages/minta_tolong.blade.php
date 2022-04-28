@extends('layouts.minta_tolong')

@include('partials.navbar2')



@section('content')


<div class="container" >
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
        <!-- End Of Heading -->     

        <!-- Formulir -->
        <form action="/pages/minta tolong" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">Email address</label>
              <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="form-group">
              <label for="item_name">Example select</label>
              <select class="form-control" id="item_name" name="item_name">
                  @foreach ($alat_medis as $am)
                    <option>{{$am->nama_alat_medis}}</option>  
                  @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="description">Example textarea</label>
              <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
@endsection

