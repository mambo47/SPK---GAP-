@extends('layouts.main')

@section('template')
    <div class="container">
        <h2> Edit Data Kriteria
        </h2>
    </div>
    <form method="POST" action="/kriteria/update/{{ $kriteria->id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="modal-body">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Kriteria</label>
                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1"
                    placeholder="Masukkan Nama Kriteria!" value=" {{ $kriteria->nama }}">

            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1"> Bobot Nilai </label>
                <input type="number" class="form-control" name="keterangan" id="exampleFormControlInput1" min="1"
                    max="100"  value=" {{ $kriteria->keterangan }}"required>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                    name="bout"onclick="window.location.href='/kriteria'">Keluar</button>
                <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
            </div>
    </form>
@endsection
