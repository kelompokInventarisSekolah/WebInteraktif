<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use DB;
class LandingController extends Controller
{
    public function index()
    {
        $berita = DB::table('beritas')->paginate(2);
        // $berita = Berita::table('pegawai')->;
        return view('index',['beritas'=>$berita],compact('berita'));
    }
    
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function detail($id)
    {
        $berita=Berita::where('id',$id)->get();
        return view('post',compact('berita'));
    }
}
