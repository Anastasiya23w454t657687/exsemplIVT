<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Posts extends Controller
{
    public function index(){
        // $text = [['id'=>1], ['id'=>2]];
        // return view("post.index", ['post'=>$text, 'hello'=>'hello']);


        $posts = Post::all();
        dump($posts);
        return view('post.index', ['posts'=>$posts]);
    }

    public function show(string $id){
        $posts = Post::findOrFail($id);
        dump($posts);
        return view('post.show', ["post"=>$posts]);
    }



    public function create(){
        return view('post.create');
    }

    public function store(Request $request){
        $fields = $request->all('title', 'content');
        dump($fields);
        $post = Post::create($fields);
        return redirect("/posts/{$post->id}");
    }


    public function edit(string $id){
        $posts = Post::findOrFail($id);
        return view('post.edit', ["post"=>$posts]);
    }
    public function update(Request $request, string $id){
        $post = Post::findOrFail($id);
        $fields = $request->all('title', 'content');
        $post->update($fields);
        return redirect()->route('post.show', [$post->id]);
     }
     public function destroy(string $id){
        $post = Post::findOrFail($id);

        return redirect('post.index', ['post'=>$post]);
     }
}
