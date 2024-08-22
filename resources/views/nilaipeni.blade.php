@extends('layouts.main')

@section('template')
    <h1>
        <p class="text-center"> <button type="button" class="btn btn-black" data-bs-toggle="modal" data-bs-target="#GuideModal">
                <h1>
                    <p class="text-center"> <strong> Tahap Penilaian </strong>
                </h1>
            </button></p>

    </h1>


    <!--Modal -->

    <!-- Tombol -->



    <!--Konten Tombol -->
    <div class="modal fade" id="modaltambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modaltambah">Form Data Guru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="GuideModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Panduan Perhitungan </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <p class="text-center"> </p> --}}
                    Tahap Penilaian ini ialah tahap yang berisi 3 nilai yaitu; nilai dari guru, nilai hitung yang
                    merupakan hasil perhitungan dari nilai guru dan nilai minimal dari tabel kategori kriteria, terahir
                    adalah nilai gap (nilai konversi dari nilai hitung) value nilai dihasilkan dari isi Rumus Profile
                    Matching. Terdapat juga beberapa fungsi didalamnya. Beberapa antara lain :
                    <br><br>
                    a. Menambah data perhitungan, anda dapat menambah data dengan klik tombol tambah data. Nantinya
                    anda diharuskan mengisi setiap nilai dari penilaian yang ada. <br>
                    b. Menghapus data perhitungan, anda dapat menghapus data dengan klik tombol hapus <br>
                    c. Mengedit data perhitungan, anda dapat edit data dengan klik tombol edit <br><br>
                    Di Kategori - Kriteria  bisa kita lihat, komponen apasaja
                    yang masuk dalam penilaian.


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>

            </div>
        </div>
    </div>
    <!-- Tambahkan button sebagai trigger untuk menampilkan modal -->
{{-- <a href="/hitung-hasil" class="btn btn-primary" id="openModalButton">Hitung</a> --}}

<!-- Modal -->
<div class="modal fade" id="WarmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan Perhitungan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- <p class="text-center"> </p> --}}
                Sudahkah anda mengisi semua data nilai? Kalau belum, inputkan segera.

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- Tambahkan tombol submit untuk mengakses href="/hitung-hasil" -->
                <a href="/hitung-hasil" class="btn btn-primary">Hitung</a>
            </div>
        </div>
    </div>
</div>


    <!-- Akhir Modal -->


    <!-- Pembuatan Table -->
    <div class="container">
        <div class="row">
            <div class="col col-lg-10">
                <form class="row" action="/caripenilaian" method="get">

                    <div class=" mt-3">
                        <select class="form-select" name="ar" id="ar">
                            @foreach ($nilai as $k)
                                <option value=""> -{{ $k->kategori_Kriteria->kriteria->nama }}- </option>
                            @break
                        @endforeach
                        @foreach ($kriteria as $k)
                            <option value="{{ $k->id }}"> {{ $k->nama }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mt-2">Search</button>
                </div>

            </form>


        </div>


    </div>




    <div class="container card-body ">
        <table class="table table-bordered table-striped table-hover">


            <thead>
                <tr>
                    <th>No</th>
                    <th>Guru</th>
                    <th>Kategori Kriteria</th>
                    <th>Kode Penilaian</th>
                    <th>Nilai</th>
                    <th>Hitung</th>
                    <th>GAP</th>
                    <th>Aksi | <button type="button" class="btn btn-black"
                            onclick="window.location.href='/penilaian/tambapenilaian'">
                            Tambah Penilaian
                        </button> </th>

                </tr>
            </thead>

            <tbody>
                <?php $no = 0; ?>
                @foreach ($nilai as $data)
                    <?php $no++; ?>
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $data->guru->nama }}</td>
                        <td>{{ $data->kategori_Kriteria->kode }}</td>
                        <td>{{ $data->kategori_Kriteria->nama }}</td>
                        <td>{{ $data->nilai }}</td>
                        <td>{{ $data->hitung }}</td>
                        <td>{{ $data->gap }}</td>

                        <th>
                            <a href="/penilaian/edit/{{ $data->id }}" class="btn btn-warning">Edit</a>
                            <a href="/penilaian/delete/{{ $data->id }}" class="btn btn-danger">Hapus</a>
                        </th>

                    </tr>
                @endforeach
            <tbody>
        </table>

    </div>

    <div class="row">
        <div class="col">

        </div>

        
        <div class="col col-lg-1 mb-1">

            <button type="button" class="btn btn-black" data-bs-toggle="modal" data-bs-target="#WarmModal">
                <p>
                <h5> Next </h5>
            </button>
        </div>
        


    </div>




</div>
@endsection
