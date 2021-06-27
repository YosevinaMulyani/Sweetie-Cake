<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\Auth;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class SweetieController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function loginform()
    {
        return view('loginform');
    }

    public function daftarform()
    {
        return view('daftarform');
    }

    public function login(Request $request)
    {

        $user = DB::table('users')->where('email', $request->email)->get();
        if (Auth::attempt($request->only('email', 'password', 'role'))) {
            foreach ($user as $User) {
                if ($User->role == 'admin') {
                    return redirect('/admin/index');
                } else {
                    return redirect('/costumer/index');
                }
                // dd($request->all());
            }
        }

        return redirect('/loginform');
    }

    public function daftar(Request $request)
    {
        DB::table('users')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'role' => 'costumer',
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect('/loginform');
        // dd($request->all());
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('index');
    }
}
