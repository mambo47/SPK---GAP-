@extends('layouts.main')

@section('template')

    <div class="container">
        <table class="table table-bordered table-striped table-hover">
            <tr>

                <th>Nama </th>
                <th>Kode </th>
                <th>Keterangan</th>
                <th>Kriteria</th>
                <th>Nilai Minimal </th>
                <th>Aksi Kriteria</th>
            </tr>

            @foreach ($katkris as $k)
                <tr>
                    <th>{{ $k->kode }}</th>
                    <th>{{ $k->nama }}</th>
                    <th>{{ $k->keterangan }}</th>
                    <th>
                        {{  $k->kriteria->nama }}
                    </th>
                    <th>{{ $k->nilai_minimal }}</th>
                    <th>
                        <a href="/kategori/edit/{{ $k->id }}" class="btn btn-warning">Edit</a>
                        <a href="/kategori/delete/{{ $k->id }}" class="btn btn-danger">Hapus</a>
                    </th>

                </tr>
            @endforeach

        </table>
    </div>

    <!-- / Pembuatan Tabel -->
@endsection
