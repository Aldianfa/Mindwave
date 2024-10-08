<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required',
            'username' => 'required',
        ]);
        //bycrypt password
        $request->merge([
            'password' => bcrypt($request->password)
        ]);

        pengguna::create($request->all());

        return redirect()->route('login')
            ->with('success', 'Anda Berhasil Terdaftar pada MINDWAVE!!, Silahkan Login..');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show(Pengguna $pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengguna $pengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengguna $pengguna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengguna $pengguna)
    {
        //
    }

    public function login(Request $request)
    {
        $request -> validate([
            'username' => 'required',
            'password' => 'required'
        ],[
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong'
        ]);

        // PROSES LOGIN
        $data = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if(Auth::attempt($data)){
            return redirect()->route('home')->with('success','Selamat Login Anda Berhasil');
        }else{
            return redirect()->back()->with('error',"Email atau Password salah");
        }

    }

    public function logout()
    {
        Auth::logout();
        // munculkan pilihan yakin akan logout atau tidak
        return redirect()->route('login')->with('success','Anda Berhasil Logout');
        
    }
}
