@extends('layouts/app')
@section('content')
    <div>
        <div class="card text-bg-dark border-0 rounded-0">
            <img src="{{ asset('img/slider1.jpg') }}" class="card-img rounded-0" alt="..." style="min-height: 480px; max-height: 480px">
            <div class="card-img-overlay rounded-0" style="position: absolute; top: 40%; left: 0%">
                <div class="container">

                    <h1 class="card-title text-dark" style="font-size: 50px"><b>Tentang Kami Pioneer Teknologi </b></h1>
                    <div class="">
                        <p><a class="link-light text-decoration-none" href="/">Home</a> / <a
                                class="link-light text-decoration-none" href="/tentang">informasi</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 p-5 ps-0">
        <p class="mb-3" style="color: #ffd100">PIONEER TEKNOLOGI</p>
        <h1 class="mb-3">Tentang Kami Pioneer Teknologi</h1>
        <p class="mb-3">Website Developer & Programmer Android dan IOS di Indonesia</p>

        <div class="row">
            <div class="col-lg-7 col-12">
                <img src="{{ asset('img/gadung-wanteknologi.jpeg') }}" alt="" style="width: 100%" class="mb-3">
                <p class="opacity-75">Pioneer Teknologi - merupakan perusahaan web developer yang menyediakan jasa pembuatan website, web
                    design dan aplikasi android dan iOS custom yang sesuai dengan kebutuhan dan keinginan Anda. Jasa
                    pengembangan website dan aplikasi dari developer dan programmer kami mencakup company profile, toko
                    online, SEO, sistem manajemen perusahaan, maupun custom web base system di Indonesia.

                    Sejak tahun 2018 Pioneer Teknologi yang berkantor di Bogor Dan Jakarta telah mengerjakan lebih dari
                    seratus proyek dengan berbagai bidang bisnis yang berbeda dan dikerjakan secara custom tanpa menggunakan
                    templates atau framework lainnya.

                    Tidak hanya website developer saja, programmer kami juga menyediakan pengembangan lain berupa jasa
                    pembuatan aplikasi android dan juga iOS custom dan jasa lainnya sesuai dengan kebutuhan Anda.</p>
            </div>
        </div>
    </div>
@endsection
