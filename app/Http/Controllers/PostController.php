<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Session;
class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::all();
        return view('admin.posts.index',['posts'=>$posts]);
    }
    
    public function show(Post $post){
        //dd( $id);
        return view('blog-post', ['post'=>$post]);
    }

    public function create(){
        //dd( $id);
        return view('admin.posts.create');
    }

    public function store(){

        $inputs = request()->validate([
            'title'=>'required|min:8|max:255',
            'post_image'=>'file',
            'body'=>'required'
        ]);

        if(request('post_image')){
            $inputs['post_image']=request('post_image')->store('images');
        }
        
        //dd($request->input('post_image'));
        auth()->user()->posts()->create($inputs);

        return back();
    }

    public function destroy(Post $post){
        $post->delete();
        Session::flash('message','Post was deleted');
        return back();
    }
}
