<?php

namespace App\Http\Controllers\Posts;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostRequest;
use App\Models\Post\Post;
use Yajra\Datatables\Datatables;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        $post = Post::create( $request->all() );
        flash()->success("Post created successfully.");
        return redirect('posts/create');
    }


    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
    }

    public function update($id, PostRequest $request)
    {
        $post = Post::find($id);

        $post->update($request->all());
        
        flash()->success("Post created successfully.");
        return redirect('posts');
    }



}
