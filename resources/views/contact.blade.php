@extends('layouts/app')
@section('content')
    <div>
        <div class="card text-bg-dark border-0 rounded-0 ">
            <img src="{{ asset('img/slider1.jpg') }}" class="card-img rounded-0 animate__animated animate__fadeInDown"
                alt="..." style="min-height: 480px; max-height: 480px">
            <div class="card-img-overlay rounded-0" style="position: absolute; top: 40%; left: 0%">
                <div class="container">

                    <h1 class="card-title text-dark animate__animated animate__fadeInDown" style="font-size: 50px"><b>Hubungi
                            Kami</b></h1>
                    <div class="animate__animated animate__fadeInDown">
                        <p><a class="link-light text-decoration-none" href="/">Home</a> / <a
                                class="link-light text-decoration-none" href="/contact">Contact Us</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 p-5 ps-0">
        <div class="row">
            <div class="col-lg-6">
                <p class="mb-3" style="color: #ffd100">CONTACT INFO PIONEER TEKNOLOGI</p>
                <h2 class="mb-3">Hotline : 0818-0212-2730 </h2>
                <p><i class="fa-solid fa-envelope" style="color: #ffd100"></i><span
                        class="opacity-75 ms-2">info@pioneerteknologi.com</span></p>
                <p><i class="fa-solid fa-location-dot" style="color: #ffd100"></i><span class="opacity-75 ms-2">Jl. Terapi
                        Raya Blok AE No.1 Bumi Menteng Asri Kel Menteng, Bogor Kode pos 16111 <a
                            href="https://goo.gl/maps/wwnNqacHfdKEQvQS7">(View map)</a></span></p>
                <hr>
            </div>
        </div>
    </div>
@endsection
