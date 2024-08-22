@extends('layouts.main')

@section('template')
    <h1>
        <p class="text-center"> <strong> Tahap 2 Perhitungan </strong> </p>
    </h1>


    <!-- Pembuatan Table -->
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="modal-title" style="text">
                    <p>
                        <strong>
                            PENILAIAN
                        </strong>
                    </p>

                </h3>
            </div>

            <div class="col col-lg-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleBobot">
                    Keterangan Bobot
                </button>



                <!-- Modal -->
                <div class="modal fade" id="exampleBobot" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"> Keterangan Bobot</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <!-- Vertically centered scrollable modal -->
                            <!-- Scrollable modal -->
                            <div class="modal-dialog modal-dialog-scrollable">
                                <!-- BOBOT -->
                                <div class="container-fluid">
                                    Kolom Tabel : <br>
                                    a. Kolom (1) yaitu Buku Nilai/Daftar Nilai
                                    <br>
                                    b. Kolom (2) yaitu Analisis/Pemetaan Keterkaitan KI KD <br>
                                    c. Kolom (3) yaitu Bank soal (Penilaian Kognitif) PH, PHB, PAS/PAT

                                    <br>
                                    d. Kolom (4) yaitu Kunci dan pedoman penskoran
                                    <br>
                                    e. Kolom (5) yaitu Penugasan terstruktur (PT) dan kegiatan mandiri tidak terstruktur
                                    (KMTT)
                                    <br>
                                    f. Kolom (6) yaitu Penilaian keterampilan (psikomotorik)
                                    <br>
                                    g. Kolom (7) yaitu Penilaian sikap/karakter
                                    <br>
                                    h. Kolom (8) yaitu Analisis Hasil Ulangan
                                    <br>
                                    i. Kolom (9) yaitu Daya serap dan ketuntasan
                                    <br>
                                    j. Kolom (10) yaitu Program perbaikan dan pengayaan
                                    <br>
                                    k. Kolom (11) yaitu Catatan pelaksanaan perbaikan
                                    <br>
                                    <!-- /BOBOT -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container card-body ">
                <form method="POST" action="/simpanpenilaian">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Kategori</th>
                                <th>GAP</th>


                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($nilai as $n)
                                {{ csrf_field() }}
                                <tr>
                                    <th> <input type="text" name="id[]" value="{{ $n->id }}" readonly
                                        class="form-control">
                                </th>
                                    <th>
                                        <p class="form-control" name="guru_id[]" value="{{ $n->guru_id }}">{{ $n->guru->nama }} </p>
                                    </th>
                                    <th>
                                        <p class="form-control">{{ $n->kategori_Kriteria->nama }} </p>
                                    </th>

                                    <th>
                                        @php
                                            switch ($n->hitung) {
                                                case 0:
                                                    $hitung = 5;
                                                    break;
                                                case 1:
                                                    $hitung = 4.5;
                                                    break;
                                                case 2:
                                                    $hitung = 3.5;
                                                    break;
                                                case -2:
                                                    $hitung = 3;
                                                    break;
                                                case 3:
                                                    $hitung = 2.5;
                                                    break;
                                                case -3:
                                                    $hitung = 2;
                                                    break;
                                                case 4:
                                                    $hitung = 1.5;
                                                    break;
                                                case -4:
                                                    $hitung = 1;
                                                    break;
                                                // ...
                                                default:
                                                    $hitung = 10;
                                                    break;
                                            }
                                        @endphp

                                        <input type="text" name="gap[]" value="{{ $hitung }}" readonly
                                            class="form-control">


                                    </th>
                            @endforeach
                        </tbody>

                    </table>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                    </div>
                </form>
            </div>


        </div>
    @endsection
