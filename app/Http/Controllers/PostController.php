<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    // get all posts from DB
    public function posts(){
        $posts = Post::all();

        return $posts;
    }

    public function show($id){

        $post = Post::find($id);

        return $post;
    }

    public function store(Request $request){
        $title = $request->title;
        $content = $request->content;

        Post::create([
            'title' => $title,
            'content' => $content,
            'user_id' => 1
        ]);
    }

    public function destroy($id){
        $post = Post::find($id);

        $post->delete();
    }

    public function update(Request $request){
        $post = Post::find($request->id);
        
        $input = $request->all();

        $post->fill($input)->save();
    }
}
