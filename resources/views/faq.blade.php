@extends('layouts/app')
@section('content')
    <div class="container-fluid">
        <div class="card mb-3 border-0 mt-5">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="{{ asset('img/faq.png') }}" class="img-fluid animate__animated animate__zoomIn" alt="...">
                </div>
                <div class="col-md-6 ">
                    <div class="card-body w-75 animate__animated animate__fadeInRight ms-auto me-auto mt-lg-5">
                        <h5 class="card-title">FAQ</h5>
                        <p class="card-text">Pertanyaan Seputar UMKM Layak dan Hal yang Perlu Diketahui.</p>

                        <div class="accordion accordion-flush mt-4" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Apa itu UMKM Layak?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">UMKM Layak adalah platform yang mempertemukan antara UMKM dengan lembaga keuangan sebagai pemberi pinjaman. </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Apa keuntungan bagi UMKM yang terdaftar di UMKM Layak?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Melalui UMKM Layak, UMKM hanya perlu mengisi data untuk dapat memperoleh pinjaman dari lembaga keuangan yang terdaftar. Selain itu, UMKM yang terdaftar di UMKM Layak dapat mengikuti berbagai kegiatan pelatihan usaha, workshop, maupun kegiatan lain terkait pengembangan usaha. </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Bagaimana cara kerja UMKM Layak?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Dalam UMKM Layak, PT. Jamkrindo berperan menilai kelayakan pengajuan pinjaman UMKM dan mempertemukan UMKM layak dengan lembaga keuangan yang bekerja sama dalam memberi pinjaman kepada UMKM. Lembaga keuangan akan memilih dan menyalurkan pinjaman kepada UMKM layak.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
