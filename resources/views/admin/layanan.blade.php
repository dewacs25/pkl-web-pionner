@extends('admin/layouts/app')

@section('content_ad')
    <div class="row">
        <!-- column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data layanan</h4>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Logo layanan</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="/admin/layanan/tambah" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="text" name="nama_teknologi" placeholder="Nama Layanan"
                                            class="form-control mb-3 @error('nama_teknologi') is-invalid @enderror">
                                        @error('nama_teknologi')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <input class="form-control mb-2" id="uploadImage" type="file" name="gambar"
                                            required onchange="PreviewImage();" />
                                        <img id="uploadPreview" class="border border-3 border-primary"
                                            style="width: 150px; height: 150px;" alt="" /><br>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            &nbsp;&nbsp;<strong>{{ $message }}</strong>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block" id="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            &nbsp;&nbsp;<strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table user-table no-wrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Nama Layanan</th>
                                    <th class="border-top-0">Waktu</th>
                                    <th class="border-top-0">Gambar</th>
                                    <th class="border-top-0">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach ($layanans as $layanan)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $layanan->nama_teknologi }}</td>

                                        <td>{{ $layanan->created_at->format('D M Y') }}</td>

                                        <td class="w-25"><img src="{{ asset('images/layanan/'.$layanan->gambar) }}"
                                                alt="" class="w-25"></td>
                                        <td>
                                            <a href="/admin/layanan/edit/{{ $layanan->id_teknologi }}" class="btn btn-warning badge">Edit</a>

                                            <form action="/admin/layanan/hapus/{{ $layanan->id_teknologi }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger badge"
                                                    onclick="return confirm('yakin Ingin Menghapus ?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <br>
                        {{ $layanans->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function PreviewImage() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
            oFReader.onload = function(oFREvent) {
                document.getElementById("uploadPreview").src = oFREvent.target.result;
            };
        };
    </script>
@endsection
