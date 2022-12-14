<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminMitraController extends Controller
{
    public function p_tambah(Request $req)
    {
        $req->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
        ]);
        $imageName = time() . '.' . $req->gambar->extension();

        $req->gambar->move(public_path('images/mitra'), $imageName);
        Mitra::insert([
            'gambar' => $imageName,
            'created_at'=> Date('Y-m-d H:i:s')
        ]);
        return redirect('/admin/mitra')->with(['success' => 'Tambah Berhasil']);
    }

    public function p_edit(Request $req,$id)
    {
        $imgLamaa = public_path('images/mitra/' . $req->gambarLama);
        unlink($imgLamaa);

        $req->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
        ]);
        $imageName = time() . '.' . $req->gambar->extension();

        $req->gambar->move(public_path('images/mitra'), $imageName);

        Mitra::where('id', $id)->update([
            'gambar' => $imageName
        ]);
    }

    public function hapus($id)
    {
        $i = DB::table('mitras')->where('id', $id)->first();
        // dd($i->image);
        $iLama = public_path('images/mitra/' . $i->gambar);

        if (file_exists($iLama)) {
            unlink($iLama);
        }
        Mitra::where('id', $id)->delete();
        return redirect('/admin/mitra')->with(['success' => 'Hapus Berhasil']);
    }
}
