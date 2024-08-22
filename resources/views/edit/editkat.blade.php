@extends('layouts.main')

@section('template')
    <div class="container">
        <h2> Edit Data Sub - Kriteria
        </h2>
    </div>
    <form method="POST" action="/kategori/update/{{ $kategori->id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="modal-body">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Sub - Kriteria</label>
                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1"
                    placeholder="Masukkan Nama Sub - Kriteria!" readonly value=" {{ $kategori->nama }}">


            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                <select class="form-select" name="keterangan">
                    <option value="">-{{ $kategori->keterangan }}- </option>
                    <option value="Core Factor"> Core Factor</option>
                    <option value="Secondary Factor"> Secondary Factor</option>
                </select>

            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Kriteria</label>

                <input type="text" class="form-control" name="kri_id" id="exampleFormControlInput1"
                    placeholder="Masukkan Nama Sub - Kriteria!" readonly value=" {{ $kategori->kriteria->nama }}">

            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nilai
                </label>
                <select class="form-select" name="nilai_minimal">
                    <option value="">-{{ $kategori->nilai_minimal }}- </option>
                    <option value="1"> Buruk</option>
                    <option value="2"> Standar </option>
                    <option value="3"> Bagus</option>
                    <option value="4"> Sempurna </option>
                </select>

            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                    name="bout"onclick="window.location.href='/kriteria'">Keluar</button>
                <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
            </div>
    </form>
@endsection
