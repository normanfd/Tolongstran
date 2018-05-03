<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
