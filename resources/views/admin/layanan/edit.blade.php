@extends('admin/layouts/app')

@section('content_ad')
    <div class="row">
        <!-- column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data Layanan</h4>
                    <form action="/admin/layanan/edit/{{ $teknologi->id_teknologi }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Nama Layanan</span>
                            <input type="text" class="form-control" placeholder="Masukan Nama teknologi" aria-label="nama_teknologi"
                                aria-describedby="basic-addon1" name="nama_teknologi" value="{{ $teknologi->nama_teknologi }}">
                        </div>

                        <div class="input-group mb-3 mt-3">
                            <input type="file" class="form-control" id="inputGroupFile02" name="gambar">
                            <label class="input-group-text" for="inputGroupFile02">\Gambar</label>
                        </div>

                        <input type="hidden" name="gambarLama" value="{{ $teknologi->gambar }}">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
