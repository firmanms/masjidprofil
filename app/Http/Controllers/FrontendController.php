<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Halaman;
use App\Models\Iklan;
use App\Models\Kas;
use App\Models\Layanan;
use App\Models\Menu;
use App\Models\Pengurus;
use App\Models\Post;
use App\Models\Profil;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        //ambil data profil
        $profil=Profil::where('id',1)->first();
        //ambil semua data slide
        $slider=Slider::all();
        //ambil slide pertama dari portal utama
        $first_slide=$slider->first();
        //ambil slide melewati yang pertama
        $not_first=Slider::orderBy('id','asc')->skip(1)->take(100)->get();
        //ambil semua data layanan
        $layanan=Layanan::all();
        //ambil data postingan kategori jadwal kegiatan saja
        $jadwalkegiatan=Post::where('kategori','Jadwal Event/Kegiatan')->where('status',1)->with('user')->take(6)->get();
        //ambil data postingan tanpa kategori jadwal kegiatan saja
        $semuapost=Post::where('kategori', '!=','Jadwal Event/Kegiatan')->where('status',1)->with('user')->take(6)->get();
        //ambil semua data layanan
        $layanan=Layanan::all();
        //ambil kategori data galeri
        $kategaleri = Galeri::select('kategori')->distinct()->get();
        //ambil semua data galeri
        $galeri=Galeri::where('status',1)->get();
        //ambil semua data iklan
        $iklan=Iklan::all();
        //ambil data menu
        $menu= Menu::first();
        $jsonString = $menu['subject'];
        $jsonStrings = json_encode($jsonString);
        $menus = json_decode($jsonStrings, true);

        return view('frontend.index',
        compact('profil','first_slide','not_first','layanan','jadwalkegiatan','semuapost','kategaleri','galeri','iklan','menus'));
    }

    public function showpage(string $slug)
    {
        //ambil data profil
        $profil=Profil::where('id',1)->first();
        //ambil data menu
        $menu= Menu::first();
        $jsonString = $menu['subject'];
        $jsonStrings = json_encode($jsonString);
        $menus = json_decode($jsonStrings, true);
        $page = Halaman::where('slug',$slug)->firstOrFail();

        return view('frontend.singlepage',
        compact('profil','page','menus'));
    }

    public function showdetail(string $slug)
    {
        //ambil data profil
        $profil=Profil::where('id',1)->first();
        //ambil data menu
        $menu= Menu::first();
        $jsonString = $menu['subject'];
        $jsonStrings = json_encode($jsonString);
        $menus = json_decode($jsonStrings, true);
        $blog = Post::where('slug',$slug)->with('user')->firstOrFail();
        $recent = Post::where('status',1)->with('user')->orderBy('publikasi','desc')->take(5)->get();

        return view('frontend.singleblog',
        compact('profil','blog','menus','recent'));
    }

    public function showblog()
    {
        //ambil data profil
        $profil=Profil::where('id',1)->first();
        //ambil data menu
        $menu= Menu::first();
        $jsonString = $menu['subject'];
        $jsonStrings = json_encode($jsonString);
        $menus = json_decode($jsonStrings, true);

        $blog = Post::where('kategori','!=','Jadwal Event/Kegiatan')->where('status',1)->orderBy('publikasi','desc')->paginate(6);

        return view('frontend.blog',
        compact('profil','blog','menus'));
    }

    public function showevent()
    {
        //ambil data profil
        $profil=Profil::where('id',1)->first();
        //ambil data menu
        $menu= Menu::first();
        $jsonString = $menu['subject'];
        $jsonStrings = json_encode($jsonString);
        $menus = json_decode($jsonStrings, true);

        $blog = Post::where('kategori','Jadwal Event/Kegiatan')->where('status',1)->orderBy('publikasi','desc')->paginate(6);

        return view('frontend.event',
        compact('profil','blog','menus'));
    }

    public function showgaleri()
    {
        //ambil data profil
        $profil=Profil::where('id',1)->first();
        //ambil data menu
        $menu= Menu::first();
        $jsonString = $menu['subject'];
        $jsonStrings = json_encode($jsonString);
        $menus = json_decode($jsonStrings, true);

        //ambil kategori data galeri
        $kategaleri = Galeri::select('kategori')->distinct()->get();
        //ambil galeri
        $galeri = Galeri::where('status',1)->orderBy('publikasi','desc')->get();

        return view('frontend.galeri',
        compact('profil','kategaleri','galeri','menus'));
    }

    public function showdetailgaleri(string $slug)
    {
        //ambil data profil
        $profil=Profil::where('id',1)->first();
        //ambil data menu
        $menu= Menu::first();
        $jsonString = $menu['subject'];
        $jsonStrings = json_encode($jsonString);
        $menus = json_decode($jsonStrings, true);
        $galeri = Galeri::where('slug',$slug)->with('user')->firstOrFail();

        return view('frontend.singlegaleri',
        compact('profil','galeri','menus'));
    }

    public function showpengurus()
    {
        //ambil data profil
        $profil=Profil::where('id',1)->first();
        //ambil data menu
        $menu= Menu::first();
        $jsonString = $menu['subject'];
        $jsonStrings = json_encode($jsonString);
        $menus = json_decode($jsonStrings, true);

        //ambil pengurus
        $pengurus = Pengurus::all();

        return view('frontend.pengurus',
        compact('profil','pengurus','menus'));
    }

    public function showkas()
    {
        //ambil data profil
        $profil=Profil::where('id',1)->first();
        //ambil data menu
        $menu= Menu::first();
        $jsonString = $menu['subject'];
        $jsonStrings = json_encode($jsonString);
        $menus = json_decode($jsonStrings, true);

        //ambil kas
        $kas = Kas::orderBy('tanggal','asc')->orderBy('id','asc')->paginate(10);
        $uangmasuk  = Kas::sum('uang_masuk');
        $uangkeluar = Kas::sum('uang_keluar');
        $saldo      = $uangmasuk-$uangkeluar;

        return view('frontend.kas',
        compact('profil','kas','uangmasuk','uangkeluar','saldo','menus'));
    }

}
