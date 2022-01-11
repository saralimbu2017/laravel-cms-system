<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function show(User $user){
        return view('admin.users.profile',['user'=>$user]);
    }

    public function update(User $user){
        // if(request('avatar')){
        //     dd(request('avatar'));
        // }
        $inputs = request()->validate([
            'username' => ['required','string','max:255','alpha_dash'],
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255','confirmed'],
            'avatart' => ['file'],
        ]);
    }
}
