<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
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
}
