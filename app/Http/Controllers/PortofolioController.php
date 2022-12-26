<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortofolioController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $portofolio = portofolio::where('user_id',$user->id)->first();
        return view('portofolio.index',compact('user','portofolio'));
    }


    public function store(Request $request)
    {
        $portofolio = new portofolio();

        $portofolio->template = $request->template;
        $portofolio->tempat = $request->tempat;
        $portofolio->tanggal = $request->tanggal;
        $portofolio->jenis_kelamin = $request->jenis_kelamin;
        $portofolio->agama = $request->agama;
        $portofolio->tinggi_badan = $request->tinggi_badan;
        $portofolio->berat_badan = $request->berat_badan;
        $portofolio->alamat = $request->alamat;
        $portofolio->no_hp = $request->no_hp;
        $portofolio->status = $request->status;
        $portofolio->email = $request->email;
        $portofolio->user_id = Auth::user()->id;
        // $input = $request->all();
        $input = $portofolio;

        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'storage/images/';
            $profileImage = Auth::user()->username."-".time() . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }
        $input->save();

        return redirect('/biodata')->with('message','kamu berhasil menambahkan data');
    }


    public function show(User $user)
    {
        $user = User::where('username', $user->username)->first();
        // dd($user);
        return view('portofolio.template',compact('user'));
    }


    public function edit(Request $request)
    {
        $user = Auth::user();
        $portofolio = portofolio::where('user_id',$user->id)->first();

        $portofolio->template = $request->template;
        $portofolio->tempat = $request->tempat;
        $portofolio->tanggal = $request->tanggal;
        $portofolio->jenis_kelamin = $request->jenis_kelamin;
        $portofolio->agama = $request->agama;
        $portofolio->tinggi_badan = $request->tinggi_badan;
        $portofolio->berat_badan = $request->berat_badan;
        $portofolio->alamat = $request->alamat;
        $portofolio->no_hp = $request->no_hp;
        $portofolio->status = $request->status;
        $portofolio->email = $request->email;
        // $input = $request->all();
        $input = $portofolio;

        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'storage/images/';
            $profileImage = Auth::user()->username."-".time() . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }
        $input->update();

        return redirect('/biodata')->with('message','kamu berhasil memperbarui data');
    }

    public function template()
    {
        return view('portofolio.template');
    }
}
