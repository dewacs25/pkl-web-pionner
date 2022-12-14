@extends('layouts/app')
@section('content')
    <div class="container-sm mt-5">
        <h2 class="text-center"><b>Blog UMKM Layak</b></h2>
        <div class="row mt-5 animate__animated animate__fadeIn">

            @foreach ($isiBlog as $blog)
                
            <div class="col-lg-4 col-12 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/blog/{{ $blog->gambar }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a class="link-dark text-decoration-none" href="/blog/{{ $blog->id }}/{{ $blog->judul }}">{{ $blog->judul }}</a></h5>
                        <p class="card-text">{!! Str::substr($blog->isi, 0, 150) !!}</p>
                       
                    </div>
                    <div class="card-footer">
                        <span style="font-size: 12px">{{ $blog->created_at }}</span>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
@endsection
