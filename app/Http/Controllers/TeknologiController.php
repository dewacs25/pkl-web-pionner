<?php

namespace App\Http\Controllers;

use App\Models\Teknologi;
use Illuminate\Http\Request;

class TeknologiController extends Controller
{
    public function tambah(Request $req)
    {
        $req->validate([
            'nama_teknologi'=>'required|min:3',
            'gambar'=>'required|image',
        ]);

        $imageName = 'Teknologi-'.time() . '.' . $req->gambar->extension();
        $req->gambar->move(public_path('images/layanan'), $imageName);

        Teknologi::create([
            'nama_teknologi'=>$req->nama_teknologi,
            'gambar'=>$imageName,
        ]);
        return redirect('/admin/layanan')->with(['success' => 'Tambah Berhasil']);

    }

    public function hapus($id)
    {
        $i = Teknologi::where('id_teknologi', $id)->first();
        // dd($i->image);
        $iLama = public_path('images/layanan/' . $i->gambar);

        if (file_exists($iLama)) {
            unlink($iLama);
        }
        Teknologi::where('id_teknologi', $id)->delete();
        return redirect('/admin/layanan')->with(['error' => 'Hapus Berhasil']);
    }

    public function edit($id)
    {
        $teknologi = Teknologi::where('id_teknologi',$id)->first();

        return view('/admin/layanan/edit',['teknologi'=>$teknologi]);
    }


    public function p_edit(Request $req,$id)
    {
        if ($req->file('gambar') == "") {
            Teknologi::where('id_teknologi', $id)->update([
                'nama_teknologi' => $req->nama_teknologi,
            ]);
        } else {
            $imgLamaa = public_path('images/layanan/' . $req->gambarLama);
            unlink($imgLamaa);

            $req->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
            ]);
            $imageName = 'Teknologi-'.time() . '.' . $req->gambar->extension();

            $req->gambar->move(public_path('images/layanan'), $imageName);

            Teknologi::where('id_teknologi', $id)->update([
                'nama_teknologi' => $req->nama_teknologi,
                'gambar' => $imageName
            ]);
        
        }
        return redirect('/admin/layanan')->with(['success' => 'Edit Berhasil']);
    }
}
