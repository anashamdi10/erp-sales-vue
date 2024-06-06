<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function show_login_view(){
        return view('admin.auth.login');
    }
    public function login(LoginRequest $request)
    {
        
        if (auth()->guard('admin')->attempt(['username' => $request->username, 
            'password' => $request->password])) {
        
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.showlogin');
        }
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('admin.showlogin');
    }

    // public function make_new_admin(){
    //     $admin = new App\Models\Admin();
    //     $admin->name = 'admin';
    //     $admin->email = 'admin@app.com';
    //     $admin->username = 'admin';
    //     $admin->password = bcrypt('admin');
    //     $admin->com_code = 1;
    //     $admin->active = 1;

    //     $admin->save();

    // }


}
