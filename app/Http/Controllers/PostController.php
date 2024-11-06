<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){
        $models = Post::orderBy('id','desc')->paginate(20);
        return view('post.index',['models' => $models]);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'text' => 'required',
            'image' => 'required',
        ]);
        Post::create($request->all());
        return redirect()->back();
    }

    public function show(Post $post){
        return view('post.show',['post' => $post]);
    }

    public function update(Request $request,Post $post){
        $post->update($request->all());
        return redirect()->back();
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->back();
    }

}
