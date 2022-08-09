<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\dudika;

class DashboardDudikaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Dudika.index',[
            'title' => 'Daftar Dudika',
            'dudikas' => dudika::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Dudika.create',[
            'title' => 'Add Dudika',
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
            'name' => ['required', 'max:255']
        ]);
        
        dudika::create($validate);
        return redirect('/dashboard/dudika')->with('success', 'dudika has been added');
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
        return view('Admin.Dudika.edit',[
            'title' => 'Edit Dudika',
            'dudika' => dudika::find($id)
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
            'name' => ['required','max:255'],
        ]);

        dudika::where('id', $id)->update($validate);

        return redirect('/dashboard/dudika')->with('success', 'dudika been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dudika::where('id', $id)->delete();

        
        return redirect('/dashboard/dudika')->with('success', 'dudika has been deleted');
    }
}