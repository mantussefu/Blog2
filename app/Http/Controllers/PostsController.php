<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use App\Http\Requests\PostValidate;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {
        $posts = Posts::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function show (Posts $post) {
        return view('posts.show', compact('post'));

    }

    public function create () {
        return view('posts.create');
    }

    public function store (PostValidate $request) {

//        $request->validate([
//            'title' => 'required',
//            'body' => 'required'
//        ]);

        $data = $request->all();
        $data['user_id'] = auth()->id();

        Posts::create($data);

        return redirect('/');
    }
}
