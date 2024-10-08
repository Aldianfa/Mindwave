<?php

namespace App\Http\Controllers;

use App\Models\Selfdiary;
use Illuminate\Http\Request;

class SelfdiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('selfdiary.index');
    }

    public function dashboard()
    {
        $selfdiaries = Selfdiary::where('id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(2);

        return view('selfdiary.dashboard', compact('selfdiaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //variabel yang menangkap id dari user yang sedang login
        $id = auth()->user()->id;
        return view('selfdiary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        //validasi data yang diinputkan
        $request->validate([
            'judul' => 'required',
            // 'id' => 'required',
            'isi' => 'required',
            'tanggal' => 'required',
        ]);

        //membuat variabel baru untuk menampung data yang diinputkan
        $selfdiary = new Selfdiary;
        $selfdiary->judul = $request->judul;
        $selfdiary->id = auth()->user()->id;
        $selfdiary->isi = $request->isi;
        $selfdiary->tanggal = $request->tanggal;

        //menyimpan data yang diinputkan
        $selfdiary->save();

        //jika data berhasil disimpan, maka akan diarahkan ke halaman dashboard
        if ($selfdiary) {
            return redirect()->route('selfdiary.dashboard')->with('success', 'Diary berhasil ditambahkan');
        } else {
            return redirect()->route('selfdiary.create')->with('error', 'Diary gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Selfdiary  $selfdiary
     * @return \Illuminate\Http\Response
     */
    public function detail($id_diary)
    {
        //menampilkan detail diary berdasarkan id diary yang dipilih melalui modal dengan nama staticBackdrop pada halaman dashboard
        $selfdiary = Selfdiary::where('id_diary', $id_diary)->first();
        return view('selfdiary.detail', compact('selfdiary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Selfdiary  $selfdiary
     * @return \Illuminate\Http\Response
     */
    public function edit(Selfdiary $selfdiary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Selfdiary  $selfdiary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Selfdiary $selfdiary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Selfdiary  $selfdiary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Selfdiary $selfdiary)
    {
        //
    }
}
