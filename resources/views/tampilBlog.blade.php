@extends('layouts/app')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-5 col-12">
                <img src="{{ asset('images/blog/' . $isiBlog->gambar) }}" class="mt-3 rounded shadow-lg" alt=""
                    style="max-width: 540px">
            </div>
            <div class="col-lg-7 col-12  d-flex justify-content-center align-items-center">
                <H2 class="">{{ $isiBlog->judul }}<br>
                    <span>
                        <p style="font-size: 12px;" class="mt-5"><i class="fa-solid fa-user"></i> Ditulis Oleh : Admin
                            &nbsp;&nbsp;&nbsp;<i class="fa-solid fa-calendar-days"></i> {{ $isiBlog->created_at->format('d M Y') }}</p>
                    </span>
                </H2>

            </div>
        </div>

        <div class="row">

            <div class="col-lg-5 col-12">
                <div class="card w-100 mt-3 " style="border-left: 7px solid blue">
                    <div class="card-header">
                        <h5>Artikel Lainnya</h5>
                    </div>
                    <div class="card-body">

                        @foreach ($blogLain as $row)
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('images/blog/'.$row->gambar) }}" style="min-height: 100%;" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a class="link-dark text-decoration-none" href="/blog/{{ $row->id }}/{{ $row->judul }}">
                                            <h5 class="card-title">{{ $row->judul }}</h5>
                                            <p class="card-text">
                                                {!! Str::substr($row->isi, 0, 100) !!}
                                            </p>
                                            <p class="card-text"><small class="text-muted"><i class="fa-solid fa-calendar-days"></i> {{ $row->created_at->format('Y M D') }}</small>
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12  d-flex justify-content-center align-items-center">
                <div class="card w-100 shadow" style="border-left: 7px solid blue">
                    <div class="card-body">
                        {!! $isiBlog->isi !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
