<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\category;

class PostController extends Controller
{   
    public function index(){
        $posts=post::all();
        return view('post.index',compact('posts'));
    }
    public function create(){
        $categories = category::all();
        return view('post.create',compact('categories'));
    }

    public function store(Request $request)
    {
        
        Post::create([
            'nbarang'=>request('nbarang'),
            'jbarang'=>request('jbarang'),
            'hbarang'=>request('hbarang'),
            'deskripsi'=>request('deskripsi'),
            'slug'=>str_slug(request('nbarang')),
            'category_id' =>request('category_id'),
            $gambar=$request->file('gambar')->store('gambars'),
            'gambar'=>$gambar
        ]);
            
        return redirect('/home');
    }
    
}

