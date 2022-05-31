<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        sleep(3);
        //$posts = Post::all();
        $posts = PostResource::collection(Post::all());

        return inertia('Posts/Index', compact('posts'));
    }
}
