<?php

namespace App\Http\Controllers;

use App\Models\Biografi;
use App\Models\portofolio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BiografiController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $portofolio = portofolio::where('user_id',$user->id)->first();
        return view('biografi.index',['portofolio' => $portofolio]);
    }
    public function store(Request $request)
    {
        $user = Auth::user();
        $portofolio = Portofolio::where('id',$user->id)->first();

        $biografi = new Biografi();
        $biografi->biografi = $request->biografi;
        $biografi->biografi_id = $portofolio->id;

        $biografi->save();
        return redirect('biografi')->with('mesagge','Kamu berhasil menambahkan data biografi');
    }

    public function edit(Request $request)
    {
        $user = Auth::user();
        $portofolio = Portofolio::where('id',$user->id)->first();
        $biografi = Biografi::where('biografi_id',$portofolio->id)->first();

        $biografi->biografi = $request->biografi;
        $biografi->biografi_id = $portofolio->id;

        $biografi->update();
        return redirect('biografi')->with('mesagge','Kamu berhasil memperbarui data biografi');
    }
}
