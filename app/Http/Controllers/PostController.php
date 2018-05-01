<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\category;

class PostController extends Controller
{   
    public function create(){
        $categories = category::all();
        return view('post.create',compact('categories'));
    }
    public function store()
    {
        Post::create([
            'nbarang'=>request('nbarang'),
            'jbarang'=>request('jbarang'),
            'hbarang'=>request('hbarang'),
            'deskripsi'=>request('deskripsi'),
            'slug'=>str_slug(request('nbarang')),
            'category_id' =>request('category_id')
        ]);
        return redirect('/home');
    }
}

