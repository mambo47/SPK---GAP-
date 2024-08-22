<?php

namespace App\Http\Controllers;

use App\Models\kategori_kriteria;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class KategoriKriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($kriteria)
    {
        // $katkris = kategori_kriteria::with('kriteria');
        $katkris = kategori_kriteria::with('kriteria')->where('kri_id', $kriteria)->get();

        // $kriteria = [];
        // foreach ($katkris as $n) {
        //     if($n["kriteria"] == $kriteria) {
        //         $kriteria = $n;
        //     }

        return view('kat', compact('katkris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kriteria = Kriteria::all();
        return view('create.tambahkategori',compact('kriteria'));
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
            'kode' => 'required',
            'keterangan' => 'required',
            'nilai_minimal' => 'required',
            'kri_id' => 'required',

        ]);

        $kategori = new kategori_kriteria;
        $kategori->nama = $request->nama;
        $kategori->kode = $request->kode;
        $kategori->keterangan = $request->keterangan;
        $kategori->nilai_minimal = $request->nilai_minimal;
        $kategori->kri_id = $request->kri_id;


        $kategori->save();
        return redirect('/kriteria');
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
        $kategori = kategori_kriteria::find($id);
        return view('edit.editkat', ['kategori' => $kategori]);
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
            'keterangan' => 'required',
            'nilai_minimal' => 'required',
        ]);

        $kategori = kategori_kriteria::find($id);
        $kategori->keterangan = $request->keterangan;
        $kategori->nilai_minimal = $request->nilai_minimal;

        $kategori->save();
        return redirect('/kriteria');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = kategori_kriteria::find($id);
        $kategori->delete();
        return redirect('/kriteria');
    }
}