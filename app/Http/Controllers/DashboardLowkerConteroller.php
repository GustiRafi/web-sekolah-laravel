<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\models\lowongan;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardLowkerConteroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lowongans = DB::table('lowongans')
                ->orderBy('id', 'desc')
                ->get();
        return view('Admin.lowongan.index',[
            'title' => 'lowongan',
            'lowongans' => $lowongans,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.lowongan.create',[
            'title' => 'Create lowongan',
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
            'title' => ['required','max:255'],
            'slug' => ['required','unique:lowongans'],
            'image' => 'required|image|max:1024',
            'description' => ["required"],
        ]);

            $validate['image'] = $request->file('image')->store('lowongan');
            lowongan::create($validate);

        return redirect('/dashboard/lowongan')->with('success', 'New post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $lowongan = lowongan::where('slug', $slug)->get();
        return view('Admin.lowongan.show',[
            'title' => 'Detail lowongan',
            'lowongans' => $lowongan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $lowongan = lowongan::where('slug', $slug)->get();
        return view('Admin.lowongan.edit',[
            'title' => 'Edit lowongan',
            'lowongans' => $lowongan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $rules =[
            'title' => ['required','max:255'],
            'image' => 'required|image|max:1024',
            'description' => ["required"],
        ];

        if($request->slug != $slug)
        {
            $rules['slug'] = ['required','unique:beritas'];
        }

        $validate = $request->validate($rules);
        if($request->file("image"))
        {
            if($request->oldimage)
            {
                Storage::delete($request->oldimage);
            }
            $validate['image'] = $request->file('image')->store('lowongan');
        }
        lowongan::where('id', $request->id)->update($validate);

        return redirect('/dashboard/lowongan')->with('success', 'Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        lowongan::where('id', $req->id)->delete();
        if($req->oldimage)
        {
            Storage::delete($req->oldimage);
        }

        return redirect('/dashboard/lowongan')->with('success', 'Post has been deleted');
    }

    public function checkslug(Request $request)
    {
        $slug = SlugService::createSlug(lowongan::class, 'slug', $request->title);
        return response()->json([
            'slug' => $slug
        ]);
    }
}