@extends('layouts/app')
@section('content')
    <div>
        <div class="card text-bg-dark border-0 rounded-0">
            <img src="{{ asset('img/slider1.jpg') }}" class="card-img rounded-0" alt="..."
                style="min-height: 480px; max-height: 480px">
            <div class="card-img-overlay rounded-0" style="position: absolute; top: 40%; left: 0%">
                <div class="container">

                    <h1 class="card-title text-dark" style="font-size: 50px"><b>Jasa {{ $namaT->nama_teknologi }}</b></h1>
                    <div class="">
                        <p><a class="link-light text-decoration-none" href="/">Home</a> / <a
                                class="link-light text-decoration-none" href="/">layanan / </a>
                            <a class="link-light text-decoration-none" href="#">{{ $namaT->nama_teknologi }} </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 p-5 ps-0">
        {{-- {{ dd($isiteknologi); }} --}}
        @if (count($isiteknologi) < 1)
            <div class="alert alert-danger" role="alert">
               Data Kosong !
            </div>
        @endif
        <div class="row">
            @foreach ($isiteknologi as $row)
                <div class="col-lg-4 col-12">
                    <div class="card border-warning border-start-0 border-end-0 border-top-0 border-5 shadow">
                        <img src="{{ asset('images/service/' . $row->gambar) }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $row->judul }}</h5>
                            <p class="card-text">{!! strtolower(substr($row->isi, 100, 250)) !!}</p>
                            <a href="/l/{{ $namaT->nama_teknologi }}/{{ $namaT->id_teknologi }}/{{ str_replace(' ', '-', $row->judul) }}/{{ $row->id }}"
                                class="text-decoration-none" style="color: #ffd100;">View details <i
                                    class="fa-sharp fa-solid fa-circle-plus ms-1"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
