@extends('admin/layouts/app')

@section('content_ad')
    <div class="row">
        <!-- column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data Layanan</h4>
                    <form action="/admin/layanan/edit/{{ $portofolio->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Nama apk</span>
                            <input type="text" class="form-control" placeholder="Masukan Nama portofolio" aria-label="nama_apk"
                                aria-describedby="basic-addon1" name="nama_apk" value="{{ $portofolio->nama_apk }}">
                        </div>

                        <div class="input-group mb-3 mt-3">
                            <input type="file" class="form-control" id="inputGroupFile02" name="gambar">
                            <label class="input-group-text" for="inputGroupFile02">\Gambar</label>
                        </div>

                        <input type="hidden" name="gambarLama" value="{{ $portofolio->gambar }}">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
