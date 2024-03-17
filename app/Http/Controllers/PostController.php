<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use function Laravel\Prompts\table;

class PostController extends Controller
{
    public function getAll($order = 'date', $dir = 'desc')
    {
        if ($order == 'date') {
            $order = 'created_at';
        }
        // $posts =  Post::all();
        // $posts = Post::orderBy('created_at', 'desc')->get();
        $posts = Post::orderBy($order, $dir)->get();
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
    public function newPost(Request $request)
    {
        Post::create($request->all());
        return redirect('/post/all');
    }

    public function editPost(Request $request, $id)
    {
        $post = Post::find($id);

        if ($request->method() == 'POST') {
            $post->title = $request->title;
            $post->desc = $request->desc;
            $post->text = $request->text;
            $post->save();
            return redirect('post/all');
        }
        return view('editPost', ['post' => $post]);
    }

    public function delPost($id)
    {
        Post::find($id)->delete();
        return redirect('post/all');
    }
}
