<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\category;
use App\User;
use Auth;

class PostController extends Controller
{   

    public function create()
    {
        $categories = category::all();
        $users = User::all();
        return view('post.create',compact('categories','users'));
    }
    
    public function show (Post $post)
    {
        return view('post.show', compact('post')); 
    }
    
    public function store(Request $request)
    {
        $this->validate(request(),[
            'nbarang'=>'required',
            'jbarang'=>'required|numeric',
            'hbarang'=>'required|numeric',
            'deskripsi'=>'required',
            'gambar'=>'required|image',
        ]);
            
        Post::create([
            'nbarang'=>request('nbarang'),
            'jbarang'=>request('jbarang'),
            'hbarang'=>request('hbarang'),
            'deskripsi'=>request('deskripsi'),
            'slug'=>str_slug(request('nbarang')),
            'category_id' =>request('category_id'),
            $gambar=$request->file('gambar')->store('gambars'),
            'gambar'=>$gambar,
            'user_id'=>request('user_id')
        ]);
            
        return redirect('/home');
    }
    
    public function furniture(){
        $posts=post::all();
        $posts=post::where('category_id', 1)-> get();
        return  view('post.indextoreadfurniture',compact('posts')); 
    }
    public function showfurniture (Post $post) 
    {
        return view('post.showfurniture', compact('post')); 
    }
    
    public function kostum()
    {
        $posts=post::all();
        $posts=post::where('category_id', 2)-> get();
        return  view('post.indextoreadkostum',compact('posts'));
    }
    public function showkostum (Post $post) 
    {
        return view('post.showkostum', compact('post')); 
    }

    public function musik()
    {
        $posts=post::all();
        $posts=post::where('category_id', 3)-> get();
        return  view('post.indextoreadmusik',compact('posts')); 
    }
    public function showmusik (Post $post) 
    {
        return view('post.showmusik', compact('post')); 
    }
    
    public function elektronik()
    {   $posts=post::all();
       $posts=post::where('category_id', 4)-> get();
        return  view('post.indextoreadelektronik',compact('posts')); 
    }
    public function showelektronik (Post $post) 
    {
        return view('post.showelektronik', compact('post')); 
    }
    public function tenda()
    {
        $posts=post::all();
        $posts=post::where('category_id', 5)-> get();
        return  view('post.indextoreadtenda',compact('posts')); 
    }
    public function showtenda (Post $post) 
    {
        return view('post.showtenda', compact('post')); 
    }
}