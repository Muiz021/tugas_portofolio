<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $portofolio = portofolio::where('user_id',$user->id)->first();
        $project = Project::where('project_id',$portofolio->id)->get();
        return view('project.index',['project' => $project]);
    }
    public function store(Request $request)
    {
        $user = Auth::user();
        $portofolio = Portofolio::where('id',$user->id)->first();

        $project = new Project();
        $project->judul = $request->judul;
        $project->deskripsi = $request->deskripsi;
        $project->project_id = $portofolio->id;

        $input = $project;

        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'storage/images/';
            $profileImage = Auth::user()->username."-".time() . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        $input->save();
        return redirect('project')->with('mesagge','Kamu berhasil menambahkan data project');
    }

    public function edit(Request $request)
    {
        $user = Auth::user();
        $portofolio = Portofolio::where('id',$user->id)->first();
        $project = Project::where('project_id',$portofolio->id)->first();

        $project->judul = $request->judul;
        $project->deskripsi = $request->deskripsi;
        $project->project_id = $portofolio->id;

        $input = $project;

        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'storage/images/';
            $profileImage = Auth::user()->username."-".time() . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        $input->update();
        return redirect('project')->with('mesagge','Kamu berhasil memperbarui data project');
    }

    public function destroy($id)
    {
        $project = Project::where('id',$id)->first();
        $project->delete();
        return redirect('project')->with('mesagge','Kamu berhasil menghapus data project');
    }
}
