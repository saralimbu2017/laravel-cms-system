<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionController extends Controller
{
    //
    public function index(){
        return view('admin.permissions.index',[
            'permissions'=>Permission::all()
        ]);
    }

    public function store(){
        request()->validate([
            'name' => ['required']
        ]);
        //return view('admin.roles.index');
        Permission::create([
            'name' => Str::ucfirst(request('name')),
            'slug' => Str::of(Str::lower(request('name')))->slug('-')
        ]);
        // dd(request('name'));
        return back();
    }
}
