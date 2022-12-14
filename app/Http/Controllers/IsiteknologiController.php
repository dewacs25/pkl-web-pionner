<?php

namespace App\Http\Controllers;

use App\Models\Isiteknologi;
use App\Models\Teknologi;
use Illuminate\Http\Request;

class IsiteknologiController extends Controller
{
    public function tambah()
    {
        $teknologis =  Teknologi::all();
        return view('admin/isilayanan/tambah' ,['teknologis'=>$teknologis]);
    }

    public function p_tambah(Request $req)
    {
        $req->validate([
            'judul'=>'required',
            'isi'=>'required',
            'gambar'=>'required|image',
            'id_teknologi'=>'required'
        ]);

        $imageName = str_replace(' ','_',$req->judul).$req->id_teknologi.time() . '.' . $req->gambar->extension();

        $req->gambar->move(public_path('images/service'), $imageName);

        Isiteknologi::create([
            'judul' => $req->judul,
            'judul_kecil' => $req->judul_kecil,
            'isi' => $req->isi,
            'gambar' => $imageName,
            'id_teknologi'=>$req->id_teknologi,
        ]);
        return redirect('/admin/service')->with(['success' => 'Tambah Berhasil']);
    }

    public function hapus($id)
    {
        $i = Isiteknologi::where('id', $id)->first();
        // dd($i->image);
        $iLama = public_path('images/service/' . $i->gambar);

        if (file_exists($iLama)) {
            unlink($iLama);
        }
        Isiteknologi::where('id', $id)->delete();
        return redirect('/admin/service')->with(['error' => 'Hapus Berhasil']);
    }

    public function edit($id)
    {
        $isiteknologi = Isiteknologi::where('id',$id)->first();
        $teknologis = Teknologi::all();

        return view('admin/isilayanan/edit',['isiteknologi'=>$isiteknologi,'teknologis'=>$teknologis]);
    }

    public function p_edit(Request $req,$id)
    {
        if ($req->file('gambar') == "") {
            Isiteknologi::where('id', $id)->update([
                'judul' => $req->judul,
                'judul_kecil' => $req->judul_kecil,
                'isi' => $req->isi,
                'id_teknologi'=>$req->id_teknologi,
            ]);
        } else {
            $imgLamaa = public_path('images/service/' . $req->gambarLama);
            unlink($imgLamaa);

            $req->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
            ]);
            $imageName = str_replace(' ','_',$req->judul).$req->id_teknologi.time() . '.' . $req->gambar->extension();

            $req->gambar->move(public_path('images/service'), $imageName);

            Isiteknologi::where('id', $id)->update([
                'judul' => $req->judul,
                'judul_kecil' => $req->judul_kecil,
                'isi' => $req->isi,
                'id_teknologi'=>$req->id_teknologi,
                'gambar'=>$imageName,
            ]);
        
        }
        return redirect('/admin/service')->with(['success' => 'Edit Berhasil']);
    }

}
