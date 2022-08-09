<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \App\Models\ppdb;

class DashbaordPpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('Admin.ppdb.index',[
            'title' => 'info PPDB',
            'ppdbs' => ppdb::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view ('Admin.ppdb.edit',[
            'title' => 'Edit info PPDB',
            'ppdb' => ppdb::find($id)
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
        $validate = $request->validate([
            'excrept' => ['required'],
            'image' => 'required|image|max:1024',
            'body' => ["required"],
        ]);

            $validate['image'] = $request->file('image')->store('ppdb');
            ppdb::create($validate);

        return redirect('/dashboard/ppdb')->with('success', 'New post has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        // ppdb::where('id', $req->id)->delete();
        // if($req->oldimage)
        // {
        //     Storage::delete($req->oldimage);
        // }

        // return redirect('/dashboard/berita')->with('success', 'Post has been deleted');
    }
}