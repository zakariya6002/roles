<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
    public function index(){
        $roles = Role::all();
        $role = Auth::user()->role;
        if($role=='1'){
            return view('admin.index',compact('roles'));
        }
        if ($role=='2'){
            return view('manager.index');
        }
        if ($role=='3'){
            return view('driver.index');
        }
        else{
            return view('dashboard');
        }
        
    }
    public function addmanager(Request $request){
        $data = new User;
        $data -> name = $request->name;
        $data -> email = $request->email;
        $data -> password =bcrypt($request->password);
        $data -> role = $request->role;

        $data->save();
         return redirect()->back();

    }
}
