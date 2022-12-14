<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class AdminBlogController extends Controller
{
    public function tambah()
    {
        $isiBlog = Blog::paginate(4);
        // $waktu = $isiBlog->created_at;
        // dd($isiBlog);
        return view('admin/blog/tambah', [
            'blogs'=>$isiBlog
        ]);
    }


    public function p_tambah(Request $req)
    {
        $req->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
        ]);
        $imageName = time() . '.' . $req->gambar->extension();

        $req->gambar->move(public_path('images/blog'), $imageName);
        Blog::insert([
            'judul' => $req->judul,
            'isi' => $req->isi,
            'gambar' => $imageName,
            'date' => Date('Y-m-d'),
            'created_at'=> Date('Y-m-d H:i:s')
        ]);
        return redirect('/admin/blog')->with(['success' => 'Tambah Berhasil']);
    }

    public function hapus($id)
    {
        $i = DB::table('blogs')->where('id', $id)->first();
        // dd($i->image);
        $iLama = public_path('images/blog/' . $i->gambar);

        if (file_exists($iLama)) {
            unlink($iLama);
        }
        Blog::where('id', $id)->delete();
        return redirect('/admin/blog')->with(['error' => 'Hapus Berhasil']);
    }


    public function edit($id)
    {
        
        $blog = Blog::where('id', $id)->first();

        return view('admin/blog/edit', ['blog' => $blog]);
        // dd($kontaks);
    }

    public function p_edit(Request $req,$id)
    {
        if ($req->file('gambar') == "") {
            Blog::where('id', $id)->update([
                'judul' => $req->judul,
                'isi' => $req->isi
            ]);
        } else {
            $imgLamaa = public_path('images/blog/' . $req->gambarLama);
            unlink($imgLamaa);

            $req->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
            ]);
            $imageName = time() . '.' . $req->gambar->extension();

            $req->gambar->move(public_path('images/blog'), $imageName);

            Blog::where('id', $id)->update([
                'judul' => $req->judul,
                'isi' => $req->isi,
                'gambar' => $imageName
            ]);
        
        }
        return redirect('/admin/blog')->with(['error' => 'Edit Berhasil']);
    }

}
