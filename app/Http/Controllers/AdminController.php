<?php


namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Isiteknologi;
use App\Models\Mitra;
use App\Models\Pelatihan;
use App\Models\Portofolio;
use App\Models\Teknologi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $isiBlog = Blog::count();
        $jumlahSekarang = Blog::where('date',date(now()->format('Y-m-d')))->count();
        if ($jumlahSekarang == 0) {
            $persen = 0;
        }else{
        $persen = $jumlahSekarang / $isiBlog * 100;

        }
        // dd($persen);
        // dd($persen);
        return view('admin/index', [
            'jumlahBlog'=>$isiBlog,
            'dataHariIni'=>$jumlahSekarang,
            'persen'=>$persen
        ]);
        
    }
    public function blog()
    {

        $isiBlog = Blog::paginate(4);
        // dd($isiBlog);
        return view('admin/blog', [
            'blogs'=>$isiBlog
        ]);
        
    }
    public function pelatihan()
    {

        $pelatihans = Pelatihan::paginate(4);
        // dd($pelatihans);
        return view('admin/pelatihan', [
            'pelatihans'=>$pelatihans
        ]);
        
    }

    public function mitra()
    {

        $mitras = Mitra::paginate(4);
        // dd($mitras);
        return view('admin/mitra', [
            'mitras'=>$mitras
        ]);
        
    }

    public function layanan()
    {

        $layanans = Teknologi::paginate(10);
        // dd($mitras);
        return view('admin/layanan', [
            'layanans'=>$layanans
        ]);
        
    }

    public function service()
    {
        $isiteknologi = Isiteknologi::paginate(4);
        $teknologis = Teknologi::all();
        // dd($isiPdf->judul);
        return view('admin/isilayanan/index', [
            'isiteknologi'=>$isiteknologi,
            'teknologis'=>$teknologis,
        ]);
    }

    public function service_tek($name,$id)
    {
        $teknologis = Teknologi::all();
        $isiteknologi = Isiteknologi::where('id_teknologi', $id)->paginate(5);
        // dd($isiteknologi);
        return view('admin/isilayanan/tampil', [
            'isiteknologi' => $isiteknologi,
            'teknologis'=>$teknologis,
        ]);
    }

    public function portofolio()
    {

        $portofolios = Portofolio::paginate(10);
        // dd($mitras);
        return view('admin/portofolio', [
            'portofolios'=>$portofolios
        ]);
        
    }

    
}
