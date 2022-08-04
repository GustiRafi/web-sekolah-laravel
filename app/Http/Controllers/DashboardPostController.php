<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = DB::table('beritas')
                ->orderBy('id', 'desc')
                ->get();
        return view('Admin.Berita.index',[
            'title' => 'Berita',
            'beritas' => $beritas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Berita.create',[
            'title' => 'Create Berita',
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
            'slug' => ['required','unique:beritas'],
            'image' => 'required|image|max:1024',
            'description' => ["required"],
        ]);

            $validate["user_id"] = auth()->user()->id;
            $validate['image'] = $request->file('image')->store('berita');
            berita::create($validate);

        return redirect('/dashboard/berita')->with('success', 'New post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $berita = berita::where('slug', $slug)->get();
        return view('Admin.Berita.show',[
            'title' => 'Detail Berita',
            'beritas' => $berita,
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
        $berita = berita::where('slug', $slug)->get();
        return view('Admin.Berita.edit',[
            'title' => 'Edit Berita',
            'beritas' => $berita
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
            $validate['image'] = $request->file('image')->store('berita');
        }
        $validate["user_id"] = auth()->user()->id;
        berita::where('id', $request->id)->update($validate);

        return redirect('/dashboard/berita')->with('success', 'Post has been updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        berita::where('id', $req->id)->delete();
        if($req->oldimage)
        {
            Storage::delete($req->oldimage);
        }

        return redirect('/dashboard/berita')->with('success', 'Post has been deleted');
    }

    public function checkslug(Request $request)
    {
        $slug = SlugService::createSlug(berita::class, 'slug', $request->title);
        return response()->json([
            'slug' => $slug
        ]);
    }
}