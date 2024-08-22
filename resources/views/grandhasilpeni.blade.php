@extends('layouts.main')

@section('template')
    <h1>
        <p class="text-center"> <button type="button" class="btn btn-black" data-bs-toggle="modal" data-bs-target="#GuideModal">
                <h1>
                    <p class="text-center"> <strong> Tahap Perhitungan </strong>
                </h1>
            </button></p>
    </h1>


    <!-- Pembuatan Table -->
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="row">
                    <form action="/results" method="get">
                        <div class="form-group">
                            <label for="start_date">Cari Guru</label>
                            <input type="text" name="ar" id="ar" class="form-control">
                        </div>


                        <button type="submit" class="btn btn-primary mt-2">Search</button>
                    </form>
                </div>

            </div>

            <div class="col col-lg-2">
                <!-- Button trigger modal -->

                <div class="modal fade" id="GuideModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Panduan Perhitungan </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {{-- <p class="text-center"> </p> --}}
                                Tahap ini ialah tahap akhir<br>
                                Dimana anda akan dilihatkan Nilai Akhir dari tahap sebelumnya, disini juga akan ditampilkan
                                hasil
                                perangkingan sesuai Nilai Akhir (dari urutan paling besar)<br> <br>
                                <p class="text-center">Rumus perangkingan </p>
                                <p class="text-center">Ranking = (x) % NMA + (x) % NSA </p>

                                Keterangan :
                                NMA : Nilai total kriteria Utama<br>
                                NSA : Nilai total kriteria Pendukung<br>
                                (x) % : Nilai persen yang diinputkan<br><br>

                                Nilai Persen didapatkan dari Nilai Bobot Tabel Kriteria.<br> Anda juga dapat mencari
                                nama guru disini.


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal -->

            </div>


            <div class="container card-body ">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>NIP</th>
                            <th>Nama Lengkap</th>
                            <th>Hasil Akhir</th>
                            <th>Ranking</th>


                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 0; ?>

                        @foreach ($grandhasil as $n)
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
