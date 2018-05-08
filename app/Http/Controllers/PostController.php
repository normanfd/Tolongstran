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
    public function show (Post $post) {
        return view('post.show', compact('post')); }

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
            'gambar'=>$gambar
        ]);
            
        return redirect('/home');
    }
    public function furniture(){
        $posts=post::all();
        $posts=post::where('category_id', 1)-> get();
        return  view('post.indextoreadfurniture',compact('posts')); }
    
    public function kostum(){
        $posts=post::all();
        $posts=post::where('category_id', 5)-> get();
        return  view('post.indextoreadkostum',compact('posts')); }

    public function tenda(){
        $posts=post::all();
       $posts=post::where('category_id', 4)-> get();
        return  view('post.indextoreadtenda',compact('posts')); }

    public function musik(){
        $posts=post::all();
       $posts=post::where('category_id', 6)-> get();
        return  view('post.indextoreadmusik',compact('posts')); }
    
    public function elektronik(){
       $posts=post::where('category_id', 3)-> get();
        return  view('post.indextoreadelektronik',compact('posts')); }
    
}