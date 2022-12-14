<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelatihanController extends Controller
{
    public function tambah()
    {
        $isiPelatihan = Pelatihan::paginate(4);
        // $waktu = $isiBlog->created_at;
        // dd($isiBlog);
        return view('admin/pelatihan/tambah', [
            'pelatihans'=>$isiPelatihan
        ]);
    }


    public function p_tambah(Request $req)
    {
        
        $req->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
        ]);
        $imageName = time() . '.' . $req->gambar->extension();

        $req->gambar->move(public_path('images/pelatihan'), $imageName);
        Pelatihan::insert([
            'judul' => $req->judul,
            'informasi' => $req->informasi,
            'waktu'=>$req->waktu,
            'gambar' => $imageName,
            'created_at'=> Date('Y-m-d H:i:s')
        ]);
        return redirect('/admin/pelatihan')->with(['success' => 'Tambah Berhasil']);
    }

    public function hapus($id)
    {
        $i = DB::table('pelatihans')->where('id', $id)->first();
        // dd($i->image);
        $iLama = public_path('images/pelatihan/' . $i->gambar);

        if (file_exists($iLama)) {
            unlink($iLama);
        }
        Pelatihan::where('id', $id)->delete();
        return redirect('/admin/pelatihan')->with(['error' => 'Hapus Berhasil']);
    }


    public function edit($id)
    {
        
        $pelatihan = Pelatihan::where('id', $id)->first();

        return view('admin/pelatihan/edit', ['pelatihan' => $pelatihan]);
        // dd($kontaks);
    }

    public function p_edit(Request $req,$id)
    {
        if ($req->file('gambar') == "") {
            Pelatihan::where('id', $id)->update([
                'judul' => $req->judul,
                'informasi' => $req->informasi,
                'waktu'=>$req->waktu,
            ]);
        } else {
            $imgLamaa = public_path('images/pelatihan/' . $req->gambarLama);
            unlink($imgLamaa);

            $req->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
            ]);
            $imageName = time() . '.' . $req->gambar->extension();

            $req->gambar->move(public_path('images/pelatihan'), $imageName);

            Pelatihan::where('id', $id)->update([
                'judul' => $req->judul,
                'informasi' => $req->informasi,
                'waktu'=>$req->waktu,
                'gambar' => $imageName
            ]);
        
        }
        return redirect('/admin/pelatihan')->with(['success' => 'Edit Berhasil']);
    }
}
