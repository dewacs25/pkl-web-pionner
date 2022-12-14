@extends('layouts/app')
@section('content')
<div class="container mt-5">

    <h3 class="text-center">Jadwal Pelatihan UMKM</h3>

    
    <div class="row mt-4">
        @foreach ($pelatihan as $row)
        <div class="col-lg-3 col-12">
            <div class="card mb-2 p-3 shadow" style="border-bottom: 5px solid blue">
                <a class="link-dark text-decoration-none" href="/pelatihan/{{ $row->id }}/{{ $row->judul }}">
                <img src="images/pelatihan/{{ $row->gambar }}" class="card-img-top ms-auto me-auto"
                    alt="...">
                <div class="card-body ">
                    <h4 class="card-title text-primary">{{ $row->waktu }}</h4>
                    <h4 class="card-title"><b>{{ $row->judul }}</b></h4>
                   
                </div>
                <span class="mt-3 text-primary ms-auto" style="font-size: 12px;"><i class="fa-solid fa-location-dot"></i> &nbsp; Daring (Online)</span>
                </a>
            </div>
            <br><br><br>
        </div>
        @endforeach
    </div>
    
  
</div>
@endsection