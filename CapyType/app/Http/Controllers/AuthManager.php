<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    public function login() {
        return view('login');
    }

    public function signin(Request $request) {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/about')->with("");
        }
        return redirect('/login')->with("error", "Login details are invalid!");
    }

    public function signup(Request $request) {
        // store data registration to table user which is name,email,password
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        # increment id
        $id = DB::table('users')->max('id');

        // # Jika email sudah ada yang punya maka kita harus mencegahnya agar tidak bisa register
        // if(DB::table('users')->where('email', $request->regemail)->exists()){
        //     return redirect('/login');
        // }

        // store data to table user
        DB::table('users')->insert([
            'id' => $id + 1,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]);

        return redirect()->intended('/about')->with("");
    }
}
