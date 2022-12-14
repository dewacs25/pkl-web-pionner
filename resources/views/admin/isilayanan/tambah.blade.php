@extends('admin/layouts/app')

@section('content_ad')
    <div class="row">
        <!-- column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah</h4>
                    <form action="/admin/service/tambah" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Judul</span>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                placeholder="Masukan Judul" aria-label="Judul" aria-describedby="basic-addon1"
                                name="judul">
                        </div>

                        @error('judul')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <textarea name="judul_kecil" class="form-control mb-3 mt-3" cols="30" rows="5" placeholder="text"></textarea>

                        <textarea name="isi" class="ckeditor @error('isi') is-invalid @enderror" id="ckedtor"></textarea>

                        @error('isi')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <label for="" class="mt-3">Layanan :</label>
                        <select name="id_teknologi" class="form-control @error('id_teknologi') is-invalid @enderror">
                            <option value="">---Pilih---</option>
                            @foreach ($teknologis as $row)
                                <option value="{{ $row->id_teknologi }}" class="p-4">
                                    <p class="p-3">{{ $row->nama_teknologi }}</p>
                                </option>
                            @endforeach
                        </select>

                        @error('id_teknologi')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="input-group mb-3 mt-3">
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="inputGroupFile02" name="gambar">
                            <label class="input-group-text" for="inputGroupFile02">\Gambar</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Tammbah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
