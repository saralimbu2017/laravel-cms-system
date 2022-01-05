<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function show(Post $post){
        //dd( $id);
        return view('blog-post', ['post'=>$post]);
    }

    public function create(){
        //dd( $id);
        return view('admin.posts.create');
    }

    public function store(){
        dd(request()->all());
    }
}
