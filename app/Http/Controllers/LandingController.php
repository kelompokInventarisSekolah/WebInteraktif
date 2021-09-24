<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Contact;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

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
        $berita = Berita::all();
        return view('contact',compact('berita'));
    }
    public function tambah_contact(Request $request)
    {
       

        // dd($request);
        Contact ::create([
            'id_user' => $request['id_user'],
            'email' => $request['email'],
            'no_hp' => $request['no_hp'],
            'message' => $request['message'],
        ]);
        
        return redirect()->route('contact')->withSuccess('Pesan Sudah Terkirim');
    }

    public function detail($id)
    {
        $berita=Berita::where('id',$id)->get();
        return view('post',compact('berita'));
    }
}
