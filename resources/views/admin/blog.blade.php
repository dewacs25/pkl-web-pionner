@extends('admin/layouts/app')

@section('content_ad')
    <div class="row">
        <!-- column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Blog</h4>
                    <a href="blog/tambah" class="btn btn-primary">Tambah</a>
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
                              
                                    <th class="border-top-0">Gambar</th>
                                    <th class="border-top-0">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $blog->judul }}</td>
                                        
                                        <td class="w-25"><img src="../images/blog/{{ $blog->gambar }}" alt="" class="w-25"></td>
                                        <td>
                                            <a href="/admin/blog/edit/{{ $blog->id }}" class="btn btn-warning badge">Edit</a>
                                            <form action="/admin/blog/hapus/{{ $blog->id }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-danger badge" onclick="return confirm('Yakin Ingin Menghapus ?');">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                       
                        <br>
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
