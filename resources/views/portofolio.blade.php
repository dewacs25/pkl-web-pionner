@extends('layouts/app')
@section('content')
    <div>
        <div class="card text-bg-dark border-0 rounded-0 animate__animated animate__fadeInDown">
            <img src="{{ asset('img/slider3.jpg') }}" class="card-img rounded-0" alt="..."
                style="min-height: 480px; max-height: 480px">
            <div class="card-img-overlay rounded-0" style="position: absolute; top: 40%; left: 0%">
                <div class="container">

                    <h1 class="card-title text-light" style="font-size: 50px"><b>Our Project</b></h1>
                    <div class="">
                        <p><a class="link-light text-decoration-none" href="/">Home</a> / <a
                                class="link-light text-decoration-none active" href="/tentang">Our Project</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 p-5 ps-0">
        <div class="news">
            <div class="row ms-lg-5 ms-3">
                @foreach ($portofolios as $portofolio)
                    <div class="col-lg-4 col-12">
                        <figure class="article animate__animated ">
                            <img src="{{ asset('images/portofolio/' . $portofolio->gambar) }}" />

                            <figcaption>
                                <h3>{{ $portofolio->nama_apk }}</h3>

                                {{-- <p>
                            In today’s update, two heads are better than one,
                            and three heads are better than that, as the all-new
                            Flockheart’s Gamble Arcana item for Ogre Magi makes
                            its grand debut.
                        </p> --}}
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
            </div>


        </div>
    </div>
@endsection
