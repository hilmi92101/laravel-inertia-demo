<?php

namespace App\Http\Controllers\Backoffice\Dashboard5;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;

class DatatableController extends Controller
{
    public function index()
    {
        //$posts = Post::all();

        /*
        $posts = Post::paginate(10)->through(function ($item) {
            return [
                'id' => $item->id,
                'user_id' => $item->user_id,
                'user_name' => $item->user->name,
                'title' => $item->title,
                'content' => $item->content,
                'created_at' => $item->created_at,
            ];
        });
        */

        //$posts = Post::with('user')->paginate(10);
        $posts = Post::with('user')->paginate(10)->through(function ($item) {
            return [
                'id' => $item->id,
                'user_id' => $item->user_id,
                'user_name' => $item->user->name,
                'title' => $item->title,
                'content' => $item->content,
                'created_at' => $item->created_at,
            ];
        });

        return inertia('Backoffice/Dashboard5/Datatable', ['posts' => $posts]);
    }
}
