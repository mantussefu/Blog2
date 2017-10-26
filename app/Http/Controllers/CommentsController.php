<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentValidate;
use Illuminate\Http\Request;
use App\Posts;
use App\Comments;
use App\User;

class CommentsController extends Controller
{
    public function store(CommentValidate $request, Posts $post){

        //dd(request()->all());
        $this->validate(request(), ['body' => 'required|min:2']);

        $post->comments()->create($request->all());

        return back();

    }
}
