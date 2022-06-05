<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\PostResource;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        //sleep(3);
        //$posts = Post::all();
        if(!auth()->user()->permissions['posts_view']){
            abort(403);
        }
        $posts = PostResource::collection(Post::orderBy('created_at','desc')->get());

        return inertia('Posts/Index', compact('posts'));
    }

    public function create()
    {
        return inertia('Posts/Create');
    }

    public function store(StorePostRequest $request)
    {
        // Post::create([
        //     'title' => $request->title,
        //     'content' => $request->content,
        // ]);

        Post::create($request->validated());

        return redirect()->route('posts.index')
        ->with('message', 'Post created successfully.');
    }

    public function edit(Post $post)
    {
        return inertia('Posts/Edit', compact('post'));
    }

    public function update(Post $post, StorePostRequest $request)
    {
        $post->update($request->validated());

        return redirect()->route('posts.index')
        ->with('message', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')
        ->with('message', 'Post deleted successfully.');
    }
    
}
