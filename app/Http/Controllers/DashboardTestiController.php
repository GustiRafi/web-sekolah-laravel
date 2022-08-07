<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\testimoni;

class DashboardTestiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.testimoni.index',[
            'title' => 'testimoni',
            'testimonis' => testimoni::orderBy('id','desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.testimoni.create',[
            'title' => 'Create testimoni',
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
            'description' => ["required"],
        ]);

        testimoni::create($validate);

        return redirect('/dashboard/testimoni')->with('success', 'New post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return view('Admin.testimoni.show',[
            'title' => 'Detail testimoni',
            'testimoni' => testimoni::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Admin.testimoni.edit',[
            'title' => 'Edit testimoni',
            'testimoni' => testimoni::find($id)
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
        $rules =[
            'name' => ['required','max:255'],
            'description' => ["required"],
        ];

        $validate = $request->validate($rules);
        testimoni::where('id', $id)->update($validate);

        return redirect('/dashboard/testimoni')->with('success', 'Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        testimoni::where('id', $id)->delete();

        return redirect('/dashboard/testimoni')->with('success', 'Post has been deleted');
    }
}