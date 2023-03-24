<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function halamanlogin(){
        return view('Pengguna.Login');
    }
    public function postlogin (Request $request)
    {


        if (Auth::attempt($request->only('email','password'))){
            return redirect('beranda');
        }
        // $level=Auth::user()->level;
        // if($level=='admin'){
        //     return redirect('dashboard');
        // }
        // if($level=='usertu'){
        //     return redirect('tupage');
        // }
        // if($level=='auditor'){
        //     return redirect('auditorpage');
        // }
        // if($level=='App1'){
        //     return redirect('apppage');
        // }
        // if($level=='App2'){
        //     return redirect('appbpage');
        // }
        //   if($level=='App2'){
        //     return redirect('appcpage');
        // }

        return redirect ('login');

    }
    public function logout (Request $request){
        Auth::logout();
        return redirect('/login');
    }


public function index (){
        return view('dashboard.register.index',[
            'users'=>User::all()
        ]);
    }


    public function create()
    {
        return view('dashboard.register.create');
    }


 /**
     * Show the form for editing the specified resource.
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */


/**
     * Show the form for editing the specified resource.
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */

      public function simpanregister (Request $request){

         $request->validate([
            'name' => 'required',
            'level' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',

        ]);
        User::create([
            'name' => $request->name,
            'level' => $request->level,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect('/dashboard/register')->with('success','Berhasil ditambahkan');
    }


        public function destroy($user)
    {
         User::findOrFail($user)->delete();
         return redirect('/dashboard/register')->with('success','Berhasil dihapus');
    }



}
