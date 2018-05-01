<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
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

=======

class PostController extends Controller
{
    public function edit(Post $post){
        
        $categories= Category::all();
        return view ('post.edit',  compact('post','categories'));
    }

    public function update (Post $post) {

        $post ->update ([
            'title'=> request('title'),
            'content'=> request('content'),
            'category_id' => request('category_id')
        ]);
            return redirect() ->route('post.index')->withInfo('Post diubah');
    }

    public function destroy (Post $post) {
        $post->delete();

        return redirect() ->route('post.index')->withDanger('Post berhasil dihapus');
    }
}
>>>>>>> d8bfb1e85f093eb9bea72f85281451491bb6214d
