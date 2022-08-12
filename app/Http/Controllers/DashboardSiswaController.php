<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\student;
use \App\Models\jurusan;
use Illuminate\Support\Facades\Storage;

class DashboardSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Siswa.index',[
            'title' => 'Daftar Siswa',
            'siswas'=> student::search(request(['search']))->paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Siswa.create',[
            'title' => 'Add Siswa',
            'jurusans' => jurusan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required','max:255'],
            'jurusan_id' => ['required'],
            'kelas' => ['required','max:255'],
            'image' => 'required|image|max:1024',
            'gender' => ['required','max:255']
        ]);

        $validate['image'] = $request->file('image')->store('siswa');
        student::create($validate);

        return redirect('/dashboard/Siswa')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Admin.Siswa.edit',[
            'title' => 'Edit Data',
            'siswa' => student::find($id),
            'jurusans' => jurusan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => ['required','max:255'],
            'jurusan_id' => ['required'],
            'kelas' => ['required','max:255'],
            'gender' => ['required','max:255']
        ];

        $validate = $request->validate($rules);
        if($request->file("image"))
        {
            if($request->oldimage)
            {
                Storage::delete($request->oldimage);
            }
            $validate['image'] = $request->file('image')->store('berita');
        }

        student::where('id', $id)->update($validate);

        return redirect('/dashboard/Siswa')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        student::where('id', $req->id)->delete();
        if($req->oldimage)
        {
            Storage::delete($req->oldimage);
        }
        return redirect('/dashboard/Siswa')->with('success', 'Data has been deleted');
    }
}