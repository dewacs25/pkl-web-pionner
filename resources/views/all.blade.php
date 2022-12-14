@extends('layouts/app')
@section('content')
    <div>
        <div class="card text-bg-dark border-0 rounded-0">
            <img src="{{ asset('img/slider1.jpg') }}" class="card-img rounded-0" alt="..."
                style="min-height: 480px; max-height: 480px">
            <div class="card-img-overlay rounded-0" style="position: absolute; top: 40%; left: 0%">
                <div class="container">

                    <h1 class="card-title text-dark" style="font-size: 50px"><b>Jasa {{ $isiteknologi->judul }}</b></h1>
                    <div class="">
                        <p><a class="link-light text-decoration-none" href="/">Home</a> / <a
                                class="link-light text-decoration-none" href="/">layanan / </a>
                            <a class="link-light text-decoration-none" href="#">{{ $namaT->nama_teknologi }} /</a>
                            <a class="link-light text-decoration-none" href="#">{{ $isiteknologi->judul }} </a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 p-5 ps-0">
        <div class="row">
            <div class="col-lg-8 col-12">
                <p style="color: #ffd100">PIONEER TEKNOLOGI</p>
                <h1><b>{{ $isiteknologi->judul }}</b></h1><br>
                <p>{{ $isiteknologi->judul_kecil }}</p>
            </div>
            <div class="col-lg-4 col-12">
                <img src="{{ asset('images/service/' . $isiteknologi->gambar) }}" class="w-100" alt="">
            </div>
        </div>
    </div>
    <div style="background: #f2f4f6" class="mb-0">
        <div class="container mt-5 p-5 ps-0">
            <p style="color: #252525">{!! $isiteknologi->isi !!}</p>
        </div>
    </div>
@endsection
