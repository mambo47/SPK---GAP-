@extends('layouts.main')

@section('template')
    <h1>
        <p class="text-center"> <button type="button" class="btn btn-black" data-bs-toggle="modal" data-bs-target="#GuideModal">
                <h1>
                    <p class="text-center"> <strong> Nominasi Penilaian </strong>
                </h1>
            </button></p>
    </h1>

    <div class="modal fade" id="GuideModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Panduan Nominasi </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-center"> </p>
                    Halaman Nominasi ini ialah tahap Pencarian Nominasi, yang mana anda dapat mencari ranking berapa saja.
                    Disini jika ingin mencari ranking, maka anda harus tulis range rangking .


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>

            </div>
        </div>
    </div>
    <!-- Pembuatan Table -->
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="row">
                    <form action="/rank" method="get">
                        <div class="form-group">
                            <label for="start_date">Ambil Rank</label>
                            <input type="text" name="ar" id="ar" class="form-control">
                        </div>


                        <button type="submit" class="btn btn-primary mt-2">Search</button>
                    </form>
                </div>

            </div>

            <div class="col col-lg-2">
                <!-- Button trigger modal -->
                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleBobot">
                    Keterangan Bobot
                </button> --}}



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
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>NIP</th>
                            <th>Nama Lengkap</th>
                            <th>Nilai Akhir</th>
                            <th>Ranking</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 0; ?>
                        @foreach ($total as $n)
                            <?php $no++; ?>
                            <tr>
                                <th>{{ $n->guru->id }}</th>
                                <th>{{ $n->guru->nama }}</th>
                                <th>{{ $n->grandhasil }}</th>

                                <th>{{ $no }}</th>

                            </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>








        </div>

        <div class="row">
            
            <div class="col">
            </div>
        @endsection
