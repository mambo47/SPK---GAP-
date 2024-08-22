@extends('layouts.main')

@section('template')
    <h1>
        <p class="text-center"> <button type="button" class="btn btn-black" data-bs-toggle="modal" data-bs-target="#GuideModal">
                <h1>
                    <p class="text-center"> <strong> Tahap Perhitungan </strong>
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
                    Tahap 3 Perhitungan , ialah tahap pengelompokan nilai berupa :<br>
                    a. NCF (Nilai Core Factor) atau Nilai Inti<br>
                    b. NSF (Nilai Secondary Factor) atau Nilai Support, <br>
                    Caranya yaitu dengan klasifikasi mana saja NCF dan NSF, sehingga dapat ditentukan Total
                    Nilai<br> <br>
                    <p class="text-center">Rumus NCF dan NSF </p>
                    <p class="text-center">𝑵𝑪𝑭=𝛴𝑁𝐶𝛴𝐼𝐶 𝑵𝑺𝑭=𝛴𝑁𝑆𝛴𝐼𝑆 </p>

                    NCF : Nilai rata-rata core factor <br>
                    NS : Nilai rata-rata secondary factor<br>
                    NC : Nilai core factor<br>
                    NS : Nilai secondary factor<br>
                    IC : Jumlah item core factor<br>
                    IS : Jumlah item secondary factor<br><br>

                    <p class="text-center">Rumus Mencari Nilai Total </p>
                    <p class="text-center"> NT = ((60% x core factor) + (40% x secondary factor)) </p><br><br>

                    Disini Anda juga bisa melihat berdasarkan Kriteria yang ada.

                    


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
                <form class="row" action="/carihasil" method="get">

                    <div class=" mt-3">
                        <select class="form-select" name="br" id="br">
                            @foreach ($total as $k)
                                <option value=""> -{{ $k->kriteria->nama }}- </option>
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
                    <th>NIP</th>
                    <th>Nama Lengkap</th>
                    <th>NCF</th>
                    <th>NSF</th>
                    <th>Total</th>
                    

                </tr>
            </thead>

            <tbody>
              
                @foreach ($total as $n)
               
                    <tr>
                        <th>{{ $n->guru->id }}</th>
                        <th>{{ $n->guru->nama }}</th>
                        <th>{{ $n->ncf }}</th>
                        <th>{{ $n->nsf }}</th>
                        <th>{{ $n->total }}</th>


                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>

    <div class="row">
        <div class="col">

        </div>

        <div class="col col-lg-1 mb-1">
            <th><a href="/hitunggrandhasil" class="btn btn-black">
                    <h5>Next<h5>
                </a></th>
        </div>
        


    </div>




</div>
@endsection
