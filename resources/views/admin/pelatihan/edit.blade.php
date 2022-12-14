@extends('admin/layouts/app')

@section('content_ad')
    <div class="row">
        <!-- column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data Pelatihan</h4>
                    <form action="/admin/pelatihan/edit/{{ $pelatihan->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Judul</span>
                            <input type="text" class="form-control" placeholder="Masukan Judul" aria-label="Judul"
                                aria-describedby="basic-addon1" name="judul" value="{{ $pelatihan->judul }}">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">waktu</span>
                            <input type="date" class="form-control" placeholder="Masukan waktu" aria-label="waktu"
                                aria-describedby="basic-addon2" name="waktu" value="{{ $pelatihan->waktu }}">
                        </div>

                        <textarea name="informasi" class="ckeditor" id="ckedtor">{{ $pelatihan->informasi }}</textarea>

                        <div class="input-group mb-3 mt-3">
                            <input type="file" class="form-control" id="inputGroupFile02" name="gambar">
                            <label class="input-group-text" for="inputGroupFile02">\Gambar</label>
                        </div>
                        <input type="hidden" name="gambarLama" value="{{ $pelatihan->gambar }}">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
