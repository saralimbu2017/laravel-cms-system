<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    //
    public function index(){

        return view('admin.roles.index',[
            'roles' => Role::all()
        ]);
    }

    public function store(){
        request()->validate([
            'name' => ['required']
        ]);
        //return view('admin.roles.index');
        Role::create([
            'name' => Str::ucfirst(request('name')),
            'slug' => Str::of(Str::lower(request('name')))->slug('-')
        ]);
        // dd(request('name'));
        return back();
    }
}
