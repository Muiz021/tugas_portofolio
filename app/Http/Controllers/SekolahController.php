<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Models\portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SekolahController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $portofolio = portofolio::where('user_id',$user->id)->first();
        return view('sekolah.index',compact('portofolio'));
    }
    public function store(Request $request)
    {
        $user = Auth::user();
        $portofolio = Portofolio::where('id',$user->id)->first();

        $sekolah = new Sekolah();
        $sekolah->sd = $request->sd;
        $sekolah->smp = $request->smp;
        $sekolah->sma = $request->sma;
        $sekolah->sekolah_id = $portofolio->id;
        $sekolah->save();
        return redirect('sekolah')->with('mesagge','Kamu berhasil menambahkan data sekolah');
    }
    public function edit(Request $request)
    {
        $user = Auth::user();
        $portofolio = Portofolio::where('id',$user->id)->first();
        $sekolah = Sekolah::where('sekolah_id',$portofolio->id)->first();

        $sekolah->sd = $request->sd;
        $sekolah->smp = $request->smp;
        $sekolah->sma = $request->sma;
        $sekolah->save();
        return redirect('sekolah')->with('mesagge','Kamu berhasil memperbarui data sekolah');
    }
}
