@extends('layouts.pertolongan')



@section('content')
  

    <!-- Header -->
<header class="bg-dark py-5">
      <!-- Tombol kembali dengan logo arrow -->
      <div class="ms-5">

        <a href="/pages/riwayat" class="previous">&laquo; KEMBALI</a>
    </div>
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">DETAIL PERTOLONGAN</h1>
            <p class="lead fw-normal text-white-50 mb-0"></p>
        </div>
    </div>
  </header>
  <!-- End of Header -->
<br>
    <!-- Make responsive border -->
    <div class="container bg-light">
        <div class="row">
            <div class="col-md-12">
                <div class="border-bottom">
                    <!-- Put title on center -->
                    <div class="text-center">
                        <h1>{{ $category->user->name }}</h1>
                    </div>

                    <ul>
                        <li>
                            <!-- Put judul pertolongan here -->
                            <div class="text-start">
                                <h3>Judul Pertolongan: <span class="lead"> {{ $pertolongan->category->title }} </span>
                                </h3>
                            </div>

                        </li>
                        <li>
                            <!-- Put deskripsi pertolongan here -->
                            <div class="text-start">
                                <h3>Deskripsi Pertolongan: <span class="lead">  {{ $pertolongan->category->description }}. </span> </h3>
                            </div>

                        </li>
                        <li>
                            <!-- Put alat medis yang dibutuhkan here -->
                            <div class="text-start">
                                <h4>Alat Medis yang Dibutuhkan: <span class="lead">
                                        {{ $pertolongan->category->item_name }} </span> </h4>
                            </div>
                        </li>
                    </ul>
                    <!-- Put a word right corner here -->
                    <div class="text-end">
                        <p><i>Penolong: {{ $pertolongan->user->name }}</i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- Footer-->
 <footer class="py-5 bg-dark mt-auto">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; HOSPIRESC</p></div>
</footer>
@endsection
