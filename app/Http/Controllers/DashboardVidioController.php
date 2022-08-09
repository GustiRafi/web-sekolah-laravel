<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\vidio;

class DashboardVidioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.vidio.index',[
            'title' => 'Daftar vidio',
            'vidios' => vidio::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.vidio.create',[
            'title' => 'Add vidio',
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
            'title' => ['required', 'max:255'],
            'src' => ['required'],
        ]);
        
        vidio::create($validate);
        return redirect('/dashboard/vidio')->with('success', 'vidio has been added');
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
        return view('Admin.vidio.edit',[
            'title' => 'Edit vidio',
            'vidio' => vidio::find($id)
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
        $validate =$request->validate([
            'title' => ['required', 'max:255'],
            'src' => ['required'],
        ]);

        vidio::where('id', $id)->update($validate);

        return redirect('/dashboard/vidio')->with('success', 'vidio been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        vidio::where('id', $id)->delete();

        return redirect('/dashboard/vidio')->with('success', 'vidio has been deleted');
    }
}