<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function loginProcess(Request $req) {
        $admin = Admin::where('username', $req->username)->first();
        
        if ($admin && Hash::check($req->password, $admin->password)) {
            session(['admin' => $admin]);
            return redirect('/admin/dashboard');
        }

        return back()->with('error', 'Username atau password salah');
    }

    public function logout() {
        session()->forget('admin');
        return redirect('/login');
    }
}
