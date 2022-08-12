<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\comment;

class commentController extends Controller
{
    public function store(Request $req)
    {
        $validate = $req->validate([
            'name' => ['required','max:255'],
            'berita_id' => ['required'],
            'body' => ['required']
        ]);

        comment::create($validate);
        return back();
    }
}