<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function tambah(Request $req)
    {
        $req->validate([
            'nama_apk'=>'required|min:1',
            'gambar'=>'required|image',
        ]);

        $imageName = 'Portofolio-'.time() . '.' . $req->gambar->extension();
        $req->gambar->move(public_path('images/portofolio'), $imageName);

        Portofolio::create([
            'nama_apk'=>$req->nama_apk,
            'gambar'=>$imageName,
        ]);
        return redirect('/admin/portofolio')->with(['success' => 'Tambah Berhasil']);

    }

    public function hapus($id)
    {
        $i = Portofolio::where('id', $id)->first();
        // dd($i->image);
        $iLama = public_path('images/portofolio/' . $i->gambar);

        if (file_exists($iLama)) {
            unlink($iLama);
        }
        Portofolio::where('id', $id)->delete();
        return redirect('/admin/portofolio')->with(['error' => 'Hapus Berhasil']);
    }

    public function edit($id)
    {
        $teknologi = Portofolio::where('id',$id)->first();

        return view('/admin/portofolio/edit',['teknologi'=>$teknologi]);
    }


    public function p_edit(Request $req,$id)
    {
        if ($req->file('gambar') == "") {
            Portofolio::where('id', $id)->update([
                'nama_apk' => $req->nama_apk,
            ]);
        } else {
            $imgLamaa = public_path('images/portofolio/' . $req->gambarLama);
            unlink($imgLamaa);

            $req->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
            ]);
            $imageName = 'Teknologi-'.time() . '.' . $req->gambar->extension();

            $req->gambar->move(public_path('images/portofolio'), $imageName);

            Portofolio::where('id', $id)->update([
                'nama_apk' => $req->nama_apk,
                'gambar' => $imageName
            ]);
        
        }
        return redirect('/admin/portofolio')->with(['success' => 'Edit Berhasil']);
    }
}
