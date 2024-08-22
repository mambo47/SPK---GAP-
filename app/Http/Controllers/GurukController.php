<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GurukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::all();
        return view('guru', compact(['guru']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.tambahguru');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Guru::create([
        //     'nama' => $request->nama,
        //     'keterangan' => $request->keterangan,
        //     'kelamin' => $request->kelamin,
        //     'alamat' => $request->alamat

        $request->validate([
            'id' => 'required',
            'nama' => 'required',
            'kelamin' => 'required',
            'alamat' => 'required',

        ]);
        $guru = new Guru;
        $guru->id = $request->id;
        $guru->nama = $request->nama;
        $guru->kelamin = $request->kelamin;
        $guru->alamat = $request->alamat;

        $guru->save();

        return redirect('/guru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = Guru::findorfail($id);
        return view('edit.guru', ['guru' => $guru]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'kelamin' => 'required',
            'alamat' => 'required'
        ]);

        $guru = Guru::find($id);
        $guru->nama = $request->nama;
        $guru->kelamin = $request->kelamin;
        $guru->alamat = $request->alamat;
        $guru->save();
        
        return redirect('/guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::find($id);
        $guru->delete();
        return redirect('/guru');
    }
}