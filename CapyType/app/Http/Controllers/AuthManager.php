<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Query\Builder;

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

            return redirect()->intended('/typing')->with("");
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
         if(DB::table('users')->where('email', $request->regemail)->exists()){
            return redirect('/login')->with("error", "email has registered!");
         }

        // store data to table user
        DB::table('users')->insert([
            'id' => $id + 1,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]);

        return redirect()->intended('/login')->with("");
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');

    }

    public function store(Request $request)
    {
        $user = Auth::user();
        if ($user->wpm < $request->input('wpm')) {
            $user->wpm = $request->input('wpm');
            $user->accuracy = $request->input('accuracy');
            $user->save();
        }
        return response()->json(['success' => true]);
    }

    public function leaderboard() {
        $leaderboards = DB::table('users')
            ->select('name', 'wpm', 'accuracy')
            ->orderByDesc('wpm')
            ->get();
        return view('leaderboard', compact('leaderboards'));
    }

    public function setting(){
        $user = Auth::user();
        return view('setting', compact('user'));
    }

        public function updateSetting(Request $request)
    {
        $user = Auth::user();
        $user->live_wpm = $request->has('live_wpm');
        $user->live_accuracy = $request->has('live_accuracy');
        $user->font_family = $request->font_family;
        $user->font_size = $request->font_size;
        $user->save();

        return redirect('/setting')->with('success', 'Settings updated successfully.');
    }
}
