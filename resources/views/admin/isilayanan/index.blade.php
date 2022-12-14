@extends('admin/layouts/app')

@section('content_ad')
    <div class="row">
        <!-- column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Blog</h4>
                    <a href="/admin/service/tambah" class="btn btn-primary">Tambah</a>
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
                                    <th class="border-top-0">Judul</th>
                                    <th class="border-top-0">
                                        <div class="dropdown">
                                            <p class="dropdown-toggle p-0 m-0" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Layanan
                                            </p>
                                            <ul class="dropdown-menu dropdown-menu-dark position-fixed" style="z-index: 100">
                                                @foreach ($teknologis as $teknologi)                                                  
                                                <li><a class="dropdown-item" href="/admin/service/{{ strtolower(str_replace(' ','-',$teknologi->nama_teknologi)) }}/{{ $teknologi->id_teknologi }}">{{ $teknologi->nama_teknologi }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </th>
                                    <th class="border-top-0">Gambar</th>
                                    <th class="border-top-0">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach ($isiteknologi as $row)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $row->judul }}</td>
                                        <td>{{ $row->teknologi->nama_teknologi }}</td>

                                        <td class="w-25"><img src="{{ asset('images/service/' . $row->gambar) }}"
                                                alt="" class="w-25"></td>
                                        <td>
                                            <a href="/admin/service/a/edit/{{ $row->id }}"
                                                class="btn btn-warning badge">Edit</a>
                                            <form action="/admin/service/hapus/{{ $row->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger badge"
                                                    onclick="return confirm('Yakin Ingin Menghapus ?');">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <br>
                        {{ $isiteknologi->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
