@extends('layouts.main')

@section('template')
    <!--Tambah Kriteria -->
    <div class="col">

        <div class="container mt-2 mb-3">
            <button type="button" class="btn btn-success" onclick="window.location.href='/kriteria/tambahkri'">
                Tambah Kriteria
            </button>
        </div>

        <div class="container mt-2 mb-3">
            <button type="button" class="btn btn-success" onclick="window.location.href='/tambahkategori'">
                Tambah Sub - Kriteria
            </button>
        </div>
    </div>
    <!-- Pembuatan Table -->

    <div class="container">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID </th>
                <th>Nama Kriteria</th>
                <th>Qty </th>
                <th>Nilai Bobot</th>
                <th>Aksi</th>
            </tr>

            @foreach ($kriteria as $k)
                <tr>
                    <th>{{ $k->id }}</th>
                    <th>{{ $k->nama }}</th>
                    <th>
                        <a href="/kategori/{{ $k->id }}">
                            {{ $k->kategori_kriteria->count() }}
                        </a>
                    </th>
                    <th>{{ $k->keterangan. "%\n"  }}</th>
                    
                    <th>
                        <a href="/kriteria/edit/{{ $k->id }}" class="btn btn-warning">Edit</a>
                        <a href="/kriteria/delete/{{ $k->id }}" class="btn btn-danger">Hapus</a>
                    </th>

                </tr>
            @endforeach

        </table>
    </div>

    <!-- / Pembuatan Tabel -->
@endsection
