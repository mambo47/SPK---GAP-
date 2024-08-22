@extends('layouts.main')

@section('template')
    <!--Modal -->

    <!-- Tombol -->
    <div class="container mt-2 mb-3">

        <button type="button" class="btn btn-success" onclick="window.location.href='/guru/tambahguru'">
            Tambah Guru
        </button>
    </div>


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
    <!-- Akhir Modal -->


    <!-- Pembuatan Table -->
    <div class="container">
        <div class="container card-body mt-2">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>NIP</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>

                @foreach ($guru as $g)
                    <tr>
                        <th>{{ $g->id }}</th>
                        <th>{{ $g->nama }}</th>
                        <th>{{ $g->kelamin }}</th>
                        <th>{{ $g->alamat }}</th>
                        <th> <a href="/guru/edit/{{ $g->id }}" class="btn btn-warning">Edit</a>
                            <a href="/guru/delete/{{ $g->id }}" class="btn btn-danger">Hapus</a>
                        </th>
                    </tr>
                @endforeach


            </table>

        </div>
        <tbody>



    </div>

    <!-- / Pembuatan Tabel -->
@endsection
