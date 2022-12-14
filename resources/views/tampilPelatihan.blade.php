@extends('layouts/app')
@section('content')
    
    <div class="container mt-5">
        <h6 class="opacity-75 text-center">PELATIHAN</h6>
        <h3 class="text-center">{{ $isipelatihan->judul }}</h3>

        <div class="card mt-4 w-100 border-0 bg-light">
            <div class="card-body w-100 d-flex justify-content-center">
                <img src="{{ asset('images/pelatihan/'.$isipelatihan->gambar) }}" class="w-auto" alt="" srcset="">
            </div>
        </div>

        <h4 class="mt-3">Informasi</h4>

        <div class="card mt-3 shadow" style="border-right: 7px solid blue">
            <div class="card-body p-5">
                {!! $isipelatihan->informasi !!}
            </div>
        </div>
    </div>

@endsection
