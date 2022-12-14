<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Isiteknologi;
use App\Models\Mitra;
use App\Models\Pelatihan;
use App\Models\Portofolio;
use App\Models\Teknologi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $blog = Blog::skip(0)->take(3)->get();
        $pelatihan = Pelatihan::skip(0)->take(4)->get();
        $mitra = Mitra::orderBy('id', 'desc')->get();
        $teknologis = Teknologi::orderBy('id_teknologi', 'desc')->get();
        $portofolio = Portofolio::skip(0)->take(3)->get();




        return view('home', [
            'active' => 'home',
            'isiBlog' => $blog,
            'isiPelatihan' => $pelatihan,
            'isiMitra' => $mitra,
            'teknologis' => $teknologis,
            'portofolios' => $portofolio,
        ]);
    }
    public function tentang()
    {

        $teknologis = Teknologi::orderBy('id_teknologi', 'desc')->get();
        return view('tentang', [
            'active' => 'tentang',
            'teknologis' => $teknologis,
        ]);
    }

    public function contact()
    {

        $teknologis = Teknologi::orderBy('id_teknologi', 'desc')->get();
        return view('contact', [
            'active' => 'contact',
            'teknologis' => $teknologis,
        ]);
    }

    public function portofolio()
    {
        $portofolio = Portofolio::all();
        $teknologis = Teknologi::orderBy('id_teknologi', 'desc')->get();
        return view('portofolio', [
            'active' => 'portofolio',
            'teknologis' => $teknologis,
            'portofolios' => $portofolio,
        ]);
    }

    public function layanan_t($nama,$id)
    {
        $teknologis = Teknologi::all();
        $namaT = Teknologi::where('id_teknologi',$id)->first();
        $isiteknologi = Isiteknologi::where('id_teknologi',$id)->paginate(6);
        // dd($isiteknologi);
        return view('isiteknologi', [
            'isiteknologi' => $isiteknologi,
            'teknologis' => $teknologis,
            'namaT'=>$namaT,
            'active'=>'',
        ]);
    }

    public function all($judul,$id,$nama,$id_isi)
    {
        $teknologis = Teknologi::all();
        $namaT = Teknologi::where('id_teknologi',$id)->first();
        $isiteknologi = Isiteknologi::where('id',$id_isi)->first();
        // dd($isiteknologi);
        return view('all', [
            'isiteknologi' => $isiteknologi,
            'teknologis' => $teknologis,
            'namaT'=>$namaT,
            'active'=>'',
        ]);
    }

    public function faq()
    {
        return view('faq', [
            'active' => 'faq'
        ]);
    }
    public function pelatihan()
    {
        $pelatihan = Pelatihan::paginate(4);
        // $waktu = $pelatihan->created_at->addYears(1);
        // $lastUpdate = $pelatihan->created_at->format('d, M Y H:i');
        // dd($pelatihan);
        return view('pelatihan', [
            'active' => 'pelatihan',
            'pelatihan' => $pelatihan
        ]);
    }

    public function blog()
    {
        $isiBlog = Blog::paginate(4);
        // $waktu = $isiBlog->created_at->addYears(1);
        // $lastUpdate = $isiBlog->created_at->format('d, M Y H:i');
        // dd($isiBlog);
        return view('blog', [
            'active' => 'blog',
            'isiBlog' => $isiBlog
        ]);
    }


    public function tampilBlog($id, $tampilBlog)
    {
        $teknologis = Teknologi::orderBy('id_teknologi', 'desc')->get();
        $blog = Blog::where('id', $id)->first();
        $blog2 = Blog::orderBy(DB::raw('RAND()'))->take(5)->get();

        //    dd($isiBlog);
        return view('tampilBlog', ['isiBlog' => $blog, 'active' => '', 'blogLain' => $blog2,'teknologis'=>$teknologis]);
    }

    public function tampilPelatihan($id, $judul)
    {

        $pelatihan = Pelatihan::where('id', $id)->first();
        $pelatihan2 = DB::table("pelatihans")->select("*")->orderBy(DB::raw('RAND()'))->take(5)->get();

        //    dd($isipelatihan);
        return view('tampilPelatihan', ['isipelatihan' => $pelatihan, 'active' => '', 'pelatihanLain' => $pelatihan2]);
    }
}
