@extends('layouts/app')
@section('content')
    <div id="carouselExampleControls" class="carousel slide animate__animated animate__fadeInDown" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card text-bg-dark border-0 rounded-0">
                    <img src="{{ asset('img/slider1.jpg') }}" class="card-img rounded-0" alt="...">
                    <div class="card-img-overlay rounded-0" style="position: absolute; top: 40%; left: 0%">
                        <div class="container-sm">

                            <h1 class="card-title text-dark"><b>Jasa Pembuatan Aplikasi Android & IOS di Bogor </b></h1>
                            <div class="d-sm-block d-none">

                                <a href="" class="btn btn-warning rounded-0 p-3 mt-2 ">Chat Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-bg-dark border-0 rounded-0">
                    <img src="{{ asset('img/slider2.jpg') }}" class="card-img rounded-0" alt="...">
                    <div class="card-img-overlay rounded-0" style="position: absolute; top: 40%; left: 0%">
                        <div class="container-sm">

                            <h1 class="card-title text-dark"><b>Jasa pembuatan website di Bogor </b></h1>
                            <div class="d-sm-block d-none">

                                <a href="" class="btn btn-warning rounded-0 p-3 mt-2 ">Chat Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-bg-dark border-0 rounded-0">
                    <img src="{{ asset('img/slider3.jpg') }}" class="card-img rounded-0" alt="...">
                    <div class="card-img-overlay rounded-0" style="position: absolute; top: 40%; left: 0%">
                        <div class="container-sm">

                            <h1 class="card-title text-dark"><b>Kembangkan bisnis anda bersama kami </b></h1>
                            <div class="d-sm-block d-none">

                                <a href="" class="btn btn-warning rounded-0 p-3 mt-2 ">Chat Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="position-absolute top-50 start-0 translate-middle ms-5 caro-b d-md-block d-none p-0" type="button"
            data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <i class="fa-solid fa-caret-left link-dark"></i>
        </button>
        <button class="position-absolute top-50 end-0 translate-middle me-2 caro-b d-md-block d-none p-0" type="button"
            data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <i class="fa-solid fa-caret-right link-dark"></i>
        </button>
    </div>

    <div class="" style="background: #014d97;">
        <div class="container-xxl p-5">
            <div class="row mb-4">
                <div class="col-lg-6 text-light">
                    <p class="mb-3" style="color: #ffd100">PIONEER TEKNOLOGI</p>
                    <h1 class="mb-3"><b>Developer Professional</b></h1>
                    <p>Percayakan semua kebutuhan IT anda kepada PIONEER TEKNOLOGI, Jasa website, mobile apps android, ios,
                        desain grafis, digital marketing hingga maintenance. Di Jamin Puas !</p>
                </div>
                @foreach ($teknologis as $teknologi)
                    <div class="col-lg-3 mb-3">
                        <a
                            href="/l/{{ strtolower(str_replace(' ', '_', $teknologi->nama_teknologi)) }}/{{ $teknologi->id_teknologi }}">
                            <div class="card card-h">
                                <div class="card-top">
                                    <p class="pt-3 ps-3"><b>{{ $teknologi->nama_teknologi }}</b></p>
                                </div>
                                <div class="card-body p-0 ps-3">
                                    <i class="fa-sharp fa-solid fa-circle-plus"></i>
                                </div>
                                <div class="card-buttom">
                                    <img src="{{ asset('images/layanan/' . $teknologi->gambar) }}" class="float-end pe-3"
                                        alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach




            </div>

            <p class="mb-4" style="color: #ffd100">Kami Berpengalaman!</p>
            <div class="bg-dart rounded">
                {{-- <div class="row">

                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-2">
                        <img src="{{ asset('img/angularjs.png') }}" alt="" style="width: 100%;">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-2">
                        <img src="{{ asset('img/nodejs.png') }}" alt="" style="width: 100%;">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-2">
                        <img src="{{ asset('img/php.png') }}" alt="" style="width: 100%;">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-2">
                        <img src="{{ asset('img/vuejs.png') }}" alt="" style="width: 100%;">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-2">
                        <img src="{{ asset('img/python.png') }}" alt="" style="width: 100%;">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-2">
                        <img src="{{ asset('img/mysql.png') }}" alt="" style="width: 100%;">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-2">
                        <img src="{{ asset('img/kotlin.png') }}" alt="" style="width: 100%;">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-2">
                        <img src="{{ asset('img/swift.png') }}" alt="" style="width: 100%;">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-2">
                        <img src="{{ asset('img/reactnative.png') }}" alt="" style="width: 100%;">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-2">
                        <img src="{{ asset('img/ruby.png') }}" alt="" style="width: 100%;">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-2">
                        <img src="{{ asset('img/golang.png') }}" alt="" style="width: 100%;">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-2">
                        <img src="{{ asset('img/flutter.png') }}" alt="" style="width: 100%;">
                    </div>

                </div> --}}

                <div class="set">

                    <div class="swiper mySwiper container mt-5 mb-5 d-lg-block d-none">
                        <div class="swiper-wrapper content ">
        
                                <div class="swiper-slide bg-transparent card border-0 ">
                                    <div class="item col-auto col-lg-auto ms-2 ">
                                        <div class="card me-5 mt-0 border-0 bg-transparent" style="min-height: 70px; max-height: 70px;">
                                            <img src="{{ asset('img/kotlin.png') }}"
                                                style="max-height: 200px; min-width: 200px; max-width: 50%;"
                                                class="card-img-top position-absolute top-50 start-50 translate-middle"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide bg-transparent card border-0 ">
                                    <div class="item col-auto col-lg-auto ms-2 ">
                                        <div class="card me-5 mt-0 border-0 bg-transparent" style="min-height: 70px; max-height: 70px;">
                                            <img src="{{ asset('img/flutter.png') }}"
                                                style="max-height: 200px; min-width: 200px; max-width: 50%;"
                                                class="card-img-top position-absolute top-50 start-50 translate-middle"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide bg-transparent card border-0 ">
                                    <div class="item col-auto col-lg-auto ms-2 ">
                                        <div class="card me-5 mt-0 border-0 bg-transparent" style="min-height: 70px; max-height: 70px;">
                                            <img src="{{ asset('img/laravel.png') }}"
                                                style="max-height: 200px; min-width: 200px; max-width: 50%;"
                                                class="card-img-top position-absolute top-50 start-50 translate-middle"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide bg-transparent card border-0 ">
                                    <div class="item col-auto col-lg-auto ms-2 ">
                                        <div class="card me-5 mt-0 border-0 bg-transparent" style="min-height: 70px; max-height: 70px;">
                                            <img src="{{ asset('img/nodejs.png') }}"
                                                style="max-height: 200px; min-width: 200px; max-width: 50%;"
                                                class="card-img-top position-absolute top-50 start-50 translate-middle"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
        
                        </div>
                    </div>
                    <div class="swiper mySwiper4 container mt-5 mb-5 d-lg-none d-block">
                        <div class="swiper-wrapper content ">
        
        
        
                            @foreach ($isiMitra as $mitra)
                                <div class="swiper-slide card border-0 ">
                                    <div class="item col-auto col-lg-auto ms-2 ">
                                        <div class="card me-5 mt-0 border-0 " style="min-height: 100px; max-height: 100px;">
                                            <img src="images/mitra/{{ $mitra->gambar }}"
                                                style="max-height: 100px; min-width: 100px; max-width: 100%;"
                                                class="card-img-top position-absolute top-50 start-50 translate-middle"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
        
        
                        </div>
                    </div>
        
        
                    <!-- <div class="swiper-button-next"></div>
                                                                                                                    <div class="swiper-button-prev"></div> -->
                    <div class="swiper-pagination "></div>
                </div>
            </div>

        </div>
    </div>

    <div class="" style="background: #ffd100;">
        <div class="container-xxl p-5">

            <div class="row p-5">
                <div class="col-lg-4 mb-3">
                    <div class="card p-4 rounded-0" style="min-height: 240px">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/favicon-pioneerteknologi.png') }}" alt="">
                            <h3 class="">Legalitas</h3>
                        </div>
                        <p class="ms-2 mt-4">Terdaftar sebagai perusahaan perseroan terbatas yang terdaftar secara sah pada
                            akta notaris di Indonesia</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card p-4 rounded-0" style="min-height: 240px">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/favicon-pioneerteknologi.png') }}" alt="">
                            <h3 class="">Berpengalaman</h3>
                        </div>
                        <p class="ms-2 mt-4">Mengedepankan dan mendedikasikan diri pada pengembangan ICT yang komprehensif
                            dan transparan</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card p-4 rounded-0" style="min-height: 240px">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/favicon-pioneerteknologi.png') }}" alt="">
                            <h3 class="">Excellence</h3>
                        </div>
                        <p class="ms-2 mt-4">Berorientasi pada kepuasan & keinginan pelanggan mengedepankan ketepatan,
                            kualitas & hasil yang memuaskan</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card p-4 rounded-0" style="min-height: 240px">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/favicon-pioneerteknologi.png') }}" alt="">
                            <h3 class="">Integritas</h3>
                        </div>
                        <p class="ms-2 mt-4">Kami mampu mewujudkan keinginan pelanggan dengan konsep duduk bersama dalam
                            lingkup persoalan.</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card p-4 rounded-0" style="min-height: 240px">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/favicon-pioneerteknologi.png') }}" alt="">
                            <h3 class="">Garansi</h3>
                        </div>
                        <p class="ms-2 mt-4">memberikan jaminan kepada semua customer yang mempercayakan Web dan Aplikasi
                            yang dibagun di kami</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card p-4 rounded-0" style="min-height: 240px">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/favicon-pioneerteknologi.png') }}" alt="">
                            <h3 class="">Support</h3>
                        </div>
                        <p class="ms-2 mt-4">Melayani dan memberikan dukungan konsultasi 24/7 kepada semua pelanggan kami
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>




    <div class="container-fluid mb-5 mt-5" style="z-index: 1000">

        <div class="set">

            <div class="swiper mySwiper container mt-5 mb-5 d-lg-block d-none">
                <div class="swiper-wrapper content ">

                    @foreach ($isiMitra as $mitra)
                        <div class="swiper-slide card border-0 ">
                            <div class="item col-auto col-lg-auto ms-2 ">
                                <div class="card me-5 mt-0 border-0 " style="min-height: 70px; max-height: 70px;">
                                    <img src="images/mitra/{{ $mitra->gambar }}"
                                        style="max-height: 70px; min-width: 70px; max-width: 50%;"
                                        class="card-img-top position-absolute top-50 start-50 translate-middle"
                                        alt="...">
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="swiper mySwiper4 container mt-5 mb-5 d-lg-none d-block">
                <div class="swiper-wrapper content ">



                    @foreach ($isiMitra as $mitra)
                        <div class="swiper-slide card border-0 ">
                            <div class="item col-auto col-lg-auto ms-2 ">
                                <div class="card me-5 mt-0 border-0 " style="min-height: 100px; max-height: 100px;">
                                    <img src="images/mitra/{{ $mitra->gambar }}"
                                        style="max-height: 100px; min-width: 100px; max-width: 100%;"
                                        class="card-img-top position-absolute top-50 start-50 translate-middle"
                                        alt="...">
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>


            <!-- <div class="swiper-button-next"></div>
                                                                                                            <div class="swiper-button-prev"></div> -->
            <div class="swiper-pagination "></div>
        </div>
    </div>

    {{-- <div class="p-5" style="background-color: rgba(163, 214, 224, 0.239)">
        <video playsinline autoplay muted loop class="w-100">
            <source src="{{ asset('video/umkm.mp4') }}" type="video/mp4" />
            Browsermu tidak mendukung tag ini, upgrade donk!
        </video>

    </div> --}}


    <div class="container mb-5">
        <div class="row mb-5">

            <div class="col-lg-6">
                <h1 class="mb-5"><b>Jasa Pembuatan Website Murah Di Bogor - Jawa Barat</b></h1>
                <p>Kami menawarkan jasa pembuatan website murah di Bogor dan sekitarnya. Kepada Anda para UKM di Bogor yang
                    ingin memiliki website ataupun perusahaan di Bogor yang ingin membuat profil perusahaan. Toko buah, toko
                    mebel, toko perlengkapan anak, toko aksesoris, toko binatang peliharaan, dan berbagai macam toko di
                    Bogor yang ingin punya toko online atau online shop.</p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('img/gadung-wanteknologi.jpeg') }}" alt="" style="max-width: 100%">
            </div>

        </div>

        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('img/Hima-min.jpeg') }}" alt="" style="max-width: 100%">
            </div>

            <div class="col-lg-6">
                <p class="mb-3" style="color: #ffd100">Wilayah</p>
                <h3 class="mb-5 mt-sm-3 mt-3">Lingkup Area Jasa Pembuatan Website Murah di Bogor</h3>
                <p>Area kami dalam pembuatan website murah di Bogor meliputi: Nanggung, Leuwiliang, Leuwisadeng, Pamijahan,
                    Cibungbulang, Ciampea, Tenjolaya, Dramaga, Ciomas, Tamansari, Cijeruk, Cigombong, Caringin, Ciawi,
                    Cisarua, Megamendung, Sukaraja, Babakan Madang, Sukamakmur, Cariu, Tanjungsari, Jonggol, Cileungsi,
                    Kelapa Nunggal, Gunung Putri, Citeureup, Cibinong, Bojong Gede, Tajur Halang, Kemang, Ranca Bungur,
                    Parung, Ciseeng, Gunung Sindur, Rumpin, Cigudeg, Sukajaya, Jasinga, Tenjo, Parung Panjang, Bogor
                    Selatan, Bogor Timur, Bogor Utara, Bogor Tengah, Bogor Barat, Tanah Sereal, dan kecamatan lainnya yang
                    ada di Bogor.</p>
            </div>

        </div>
    </div>



    <div class="" style="background: #014d97;">
        <div class="container p-5">
            <p class="mb-3" style="color: #ffd100">FEATURED PROJECT</p>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h1 class="text-light mb-3"><b>The great work we did</b></h1>
                </div>
                <div class="col-lg-6 col-12 mt-4">
                    <a href="" class="text-decoration-none text-light float-lg-end hover-a">View all post <i
                            class="fa-sharp fa-solid fa-circle-plus ms-1"></i></a>
                </div>
            </div>


            <div class="news">
                @foreach ($portofolios as $portofolio)
                    <figure class="article">
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
                @endforeach

            </div>
        </div>
    </div>



    <div class="container mt-5 mb-5 p-5">
        <div class="row">
            <div class="col-lg-8 col-12">

                <div class="">
                    <div class="">
                        <p class="" style="color: #ffd100">CLIENTS</p>
                        <h1><b>What our customers say</b></h1>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-12 text-dark">
                <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner shadow">
                        <div class="carousel-item active">
                            <div class="card">

                                <div class="card-body">

                                    <p class=" text-dark opacity-75" style="font-size: 13px;">"Saya mendapat berbagai
                                        pelatihan pengembangan usaha dari UMKM Layak. Selain itu, saya juga mendapat
                                        kemudahan permodalan untuk meningkatkan usaha."</p>

                                </div>
                                <div class="card-footer border-0">
                                    <h5>ALLEN SELVYA</h5>
                                    <p class="opacity-75" style="font-size: 13px;">Pengusaha Konveksi Allen Collection</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="card">

                                <div class="card-body">

                                    <p class="text-dark card-text opacity-75" style="font-size: 13px;">"Melalui penjaminan
                                        dari
                                        Jamkrindo, usaha saya semakin maju."</p>

                                </div>
                                <div class="card-footer border-0">
                                    <h5>APAI BIN ABDUL</h5>
                                    <p class="opacity-75" style="font-size: 13px;">Pengusaha Es Doger</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="card">

                                <div class="card-body">

                                    <p class="text-dark card-text opacity-75" style="font-size: 13px;">""Alhamdulillah
                                        berkat
                                        Penjaminan Jamkrindo, usaha kami semakin lancar dan dapat menambah kepercayaan dari
                                        mitra kami."</p>

                                </div>
                                <div class="card-footer border-0">
                                    <h5>HARIANTI</h5>
                                    <p class="opacity-75" style="font-size: 13px;">CV. Khansa Mandiri</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="btn btn-outline-dark rounded-circle badge" type="button"
                    data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                    <i class="fa-solid fa-caret-left link-dark"></i>
                </button>
                <button class="btn btn-outline-dark rounded-circle badge" type="button"
                    data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                    <i class="fa-solid fa-caret-right link-dark"></i>
                </button>
            </div>
        </div>
    </div>


    <div class="container p-5">
        <p class="mb-3" style="color: #ffd100">THE NEWS</p>
        <div class="row">
            <div class="col-lg-6 col-12">
                <h1 class="text-dark mb-3"><b>Lates News form us</b></h1>
            </div>
            <div class="col-lg-6 col-12 mt-4">
                <a href="" class="text-decoration-none text-dark float-lg-end hover-a">View all post <i
                        class="fa-sharp fa-solid fa-circle-plus ms-1"></i></a>
            </div>

            <div class="row mt-5">
                @foreach ($isiBlog as $blog)
                    <div class="col-lg-4 col-12">
                        <div class="card mb-2 p-3">
                            <img src="images/blog/{{ $blog->gambar }}" class="card-img-top ms-auto me-auto"
                                alt="...">
                            <div class="card-body ">
                                <h5 class="card-title"><a class="link-dark text-decoration-none"
                                        href="/blog/{{ $blog->id }}/{{ $blog->judul }}">{{ $blog->judul }}</a>
                                </h5>
                                <p class="card-text">{!! Str::substr($blog->isi, 0, 150) !!}</p>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
