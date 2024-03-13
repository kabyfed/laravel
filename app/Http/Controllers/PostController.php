<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use function Laravel\Prompts\table;

class PostController extends Controller
{
    public function getAll($order = 'date')
    {
        if ($order == 'date') {
            $order = 'created_at';
        }
        // $posts =  Post::all();
        // $posts = Post::orderBy('created_at', 'desc')->get();
        $posts = Post::orderBy($order, 'desc')->get();
        return view('index', ['posts' => $posts]);
    }
    public function getOne($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return view('404');
        }
        return view('show', ['post' => $post]);
    }
}
