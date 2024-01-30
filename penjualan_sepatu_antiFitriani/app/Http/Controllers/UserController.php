<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(Auth()->User()->level == 'Admin'){
            $user = User::all();
            return view('home.user.index', compact('user'));
        // }else{
        //     return redirect('/login')->with('error', 'Maaf Anda Tidak Dapat Mengakses Halaman Kasir', 'Silahkan Login Sebagai Admin');
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('home.user.tambah',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'username' => $request -> username,
            'password' => bcrypt($request -> password),
            'nama_kasir' => $request -> nama_kasir,
            'level' => $request -> level
        ]);
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('home.user.edit', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'username' => $request -> username,
            'password' => bcrypt($request -> password),
            'nama_kasir' => $request -> nama_kasir,
            'level' => $request -> level,
            $request -> except(['_token'])
        ]);
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user -> delete();
        return redirect('/user');
    }
}
