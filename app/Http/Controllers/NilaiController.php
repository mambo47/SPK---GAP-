<?php

namespace App\Http\Controllers;

use App\Models\gap_pelaksanaan;
use App\Models\grandhasil;
use App\Models\Guru;
use App\Models\kategori_kriteria;
use App\Models\Kriteria;
use App\Models\Nilai;
use App\Models\nilai02;
use App\Models\total;
use App\Models\total_pelak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
    public function index()
    {

        $kriteria = Kriteria::all();
        $kategori_kriteria = kategori_kriteria::all();
        $nilai = Nilai::with('guru', 'kategori_Kriteria', 'kategori_Kriteria.kriteria')->orderBy('guru_id', 'asc')
            // $nilai = Nilai::has('guru', 'nilai.kategori_Kriteria', 'nlai.kategori_Kriteria.kategori')
            ->whereHas('kategori_Kriteria.kriteria', function ($query) {
                $query->where('id', '1');


            })

            ->get();

        return view('nilaipeni', compact('nilai', 'kriteria', 'kategori_kriteria'));
    }
    public function total()
    {

        $nilai = Nilai::with('guru')->orderBy('guru_id', 'asc')->get();


        return view('totalpeni', compact('nilai'));


    }
    public function nominasi()
    {

        $total = grandhasil::orderby('grandhasil', 'DESC')->get();




        return view('nominasi', compact('total'));


    }
    public function hitung_hasil()
    {
        // Menghapus semua data dari tabel menggunakan query builder
        DB::table('total')->delete();

        $guru = Guru::all();

        foreach ($guru as $g) {
            $kategori_kriteria = kategori_kriteria::all();

            foreach ($kategori_kriteria as $kk) {
                $ncf = Nilai::where('guru_id', $g->id)
                    ->whereHas('kategori_kriteria', function ($query) use ($kk) {
                        $query->where('keterangan', 'Core Factor')->where('kri_id', $kk->kri_id);
                    })
                    ->sum('gap');

                $countncf = Nilai::where('guru_id', $g->id)
                    ->whereHas('kategori_kriteria', function ($query) use ($kk) {
                        $query->where('keterangan', 'Core Factor')->where('kri_id', $kk->kri_id);
                    })
                    ->count();

                $averagencf = ($countncf > 0) ? $ncf / $countncf : 0;

                $nsf = Nilai::where('guru_id', $g->id)
                    ->whereHas('kategori_kriteria', function ($query) use ($kk) {
                        $query->where('keterangan', 'Secondary Factor')->where('kri_id', $kk->kri_id);
                    })
                    ->sum('gap');

                $countnsf = Nilai::where('guru_id', $g->id)
                    ->whereHas('kategori_kriteria', function ($query) use ($kk) {
                        $query->where('keterangan', 'Secondary Factor')->where('kri_id', $kk->kri_id);
                    })
                    ->count();

                $averagensf = ($countnsf > 0) ? $nsf / $countnsf : 0;

                total::updateOrCreate([
                    'guru_id' => $g->id,
                    'kri_id' => $kk->kri_id,
                ], [
                        'ncf' => $averagencf,
                        'nsf' => $averagensf,
                        'total' => (0.6 * $averagencf) + (0.4 * $averagensf),
                    ]);
            }
        }



        return redirect('/hasilpenilaian');

    }
    public function hasil()
    {
        $kriteria = Kriteria::all();
        $total = total::with('guru', 'kriteria')->orderBy('guru_id', 'asc')
            ->whereHas('kriteria', function ($query) {
                $query->where('kri_id', 1);
            })
            ->get();


        return view('hasilpeni', compact('total', 'kriteria'));

    }
    public function grandhasil()
    {
        $grandhasil = grandhasil::with('guru')->orderby('grandhasil', 'desc')->get();


        return view('grandhasilpeni', compact(['grandhasil']));

    }
    public function hitunggrandhasil()
    {
      
        DB::table('grandhasil')
            ->join('guru', 'grandhasil.guru_id', '=', 'guru.id')
            ->select('guru.id as guru_id')
            ->orderBy('guru.id') // Tambahkan ini untuk mengurutkan berdasarkan guru.id
            ->groupBy('guru.id')
            ->chunk(100, function ($gurus) {
                foreach ($gurus as $guru) {
                    $totalGrandhasil = DB::table('total')
                        ->join('kriteria', 'total.kri_id', '=', 'kriteria.id')
                        ->where('total.guru_id', $guru->guru_id)
                        ->sum(DB::raw('total.total * kriteria.keterangan'));

                    Grandhasil::updateOrCreate(
                        ['guru_id' => $guru->guru_id],
                        ['grandhasil' => $totalGrandhasil]
                    );
                }
            });

        return redirect('/grandhasilpenilaian');


    }


    /**
     * Summary of hasil
     * @param Request $request
     * @return void
     */
    public function simpan(Request $request)
    {

        $request->validate([
            'id' => 'required',
            'guru_id' => 'required',
            'gap' => 'required',

        ]);

        //save orm
        // //simpan ke nilai 
        for ($i = 0; $i < sizeof($request->id); $i++) {

            Nilai::updateOrCreate(['id' => $request->id[$i]], [
                'gap' => $request->gap[$i],
            ]);

            // //simpan ke nilai 

            for ($i = 0; $i < sizeof($request->id); $i++) {
                $penincf = DB::table('kategori_kriteria')
                    ->where('keterangan', 'LIKE', '%core_factor%')
                    ->where('nama', 'LIKE', '%hp%')
                    ->get();

                $silancf = DB::table('kategori_kriteria')
                    ->where('keterangan', 'LIKE', '%core_factor%')
                    ->where('nama', 'LIKE', '%hns%')
                    ->get();

                $peninsf = DB::table('kategori_kriteria')
                    ->where('keterangan', 'LIKE', '%secondary_factor%')
                    ->where('nama', 'LIKE', '%hns%')
                    ->get();
                $silansf = DB::table('kategori_kriteria')
                    ->where('keterangan', 'LIKE', '%secondary_factor%')
                    ->where('nama', 'LIKE', '%hns%')
                    ->get();
                total::updateOrCreate(['id' => $request->id[$i]], [
                    'nilai_id' => $request->id[$i],
                    'guru_id' => $request->guru_id[$i],
                    'ncf' => $request->$penincf[$i],
                    'nsf' => $request->$peninsf[$i],




                ]);



            }

            return redirect('/penilaian');

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all();
        $nilai = Nilai::all();
        $katkris = kategori_kriteria::all();


        return view('create.tambahpeni', compact('guru', 'nilai', 'katkris'));
    }
    public function edit($id)
    {

        $nilai = Nilai::findorfail($id);
        $katkris = kategori_kriteria::all();


        return view('edit.editpenilaian', compact('katkris', 'nilai'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'kateg' => 'required',
            'nilai' => 'required',

        ]);

        //batas minimal
        $batasminim = kategori_kriteria::where('id', $request->kateg)->first()->nilai_minimal;


        $hitung = $request->nilai - $batasminim;

        if ($hitung == 0) {
            $gap = 5;
        } elseif ($hitung == 1) {
            $gap = 4.5;
        } elseif ($hitung == -1) {
            $gap = 4;
        } elseif ($hitung == 2) {
            $gap = 3.5;
        } elseif ($hitung == -2) {
            $gap = 3;
        } elseif ($hitung == 3) {
            $gap = 2.5;
        } elseif ($hitung == -3) {
            $gap = 2;
        } elseif ($hitung == 4) {
            $gap = 1.5;
        } elseif ($hitung == -4) {
            $gap = 1;
        } else {
            $gap = 0;
        }
        // return $gap;

        //simpan ke nilai 
        $pre = Nilai::find($id);
        $pre->nilai = $request->nilai;
        $pre->hitung = $hitung;
        $pre->gap = $gap;
        $pre->save();


        return redirect('/penilaian');
     

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
            'kateg' => 'required',
            'nilai' => 'required',
        ]);

        //batas minimal
        $batasminim = kategori_kriteria::where('id', $request->kateg)->first()->nilai_minimal;

        $hitung = $request->nilai - $batasminim;

        if ($hitung == 0) {
            $gap = 5;
        } elseif ($hitung == 1) {
            $gap = 4.5;
        } elseif ($hitung == -1) {
            $gap = 4;
        } elseif ($hitung == 2) {
            $gap = 3.5;
        } elseif ($hitung == -2) {
            $gap = 3;
        } elseif ($hitung == 3) {
            $gap = 2.5;
        } elseif ($hitung == -3) {
            $gap = 2;
        } elseif ($hitung == 4) {
            $gap = 1.5;
        } elseif ($hitung == -4) {
            $gap = 1;
        } else {
            $gap = 0;
        }

        //simpan ke nilai 
        $pre = new Nilai;
        $pre->guru_id = $request->nama;
        $pre->kategori_kriteria_id = $request->kateg;
        $pre->nilai = $request->nilai;
        $pre->hitung = $hitung;
        $pre->gap = $gap;
        $pre->save();

        return redirect('/penilaian');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $pelak = Nilai::find($id);

        $pelak->delete();

        return redirect('/penilaian');
    }
    public function cari(Request $request)
    {


        $ar = $request->input('ar');

        $kriteria = Kriteria::all();
        $nilai = Nilai::with('guru', 'kategori_Kriteria', 'kategori_Kriteria.kriteria')->orderBy('guru_id', 'asc')
            ->whereHas('kategori_Kriteria.kriteria', function ($query) use ($ar) {
                $query->where('id', 'LIKE', '%' . $ar . '%');
            })
            ->get();

        return view('nilaipeni', compact('nilai', 'kriteria'));


    }
    public function carihasil(Request $request)
    {


        $br = $request->input('br');

        $kriteria = Kriteria::all();
        $total = total::with('guru', 'kriteria')->orderBy('guru_id', 'asc')
            ->whereHas('kriteria', function ($query) use ($br) {
                $query->where('kri_id', 'LIKE', '%' . $br . '%');

            })
            ->get();

        return view('hasilpeni', compact('total', 'kriteria'));


    }
    public function search(Request $request)
    {

        //ambil limit
        // $ar = $request->input('ar');
        // $results = Guru::where('nama', 'LIKE', "%$ar%")->get();

        $ar = $request->input('ar');

        $data = grandhasil::select('grandhasil.*')
            ->join('guru', 'grandhasil.guru_id', '=', 'guru.id')
            ->where('guru.nama', 'LIKE', "%$ar%")
            ->get();

        return view('cariakhir', ['data' => $data,]);



    }
    public function rank(Request $request)
    {

        //ambil limit
        $ar = $request->input('ar');



        $data = grandhasil::with('guru')->orderBy('grandhasil', 'desc')
            ->take($ar)
            ->get();


        // Tambahkan kolom peringkat (rank) ke dalam data
        $data->map(function ($item, $index) {
            $item->rank = $index + 1;
            return $item;
        });

        return view('carinama', compact('data'));

    }

}