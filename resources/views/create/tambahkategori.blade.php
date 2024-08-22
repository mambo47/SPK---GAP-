@extends('layouts.main')

@section('template')
    <div class="container">
        <h2> Tambah Data Sub - Kriteria
        </h2>
    </div>
    <form method="POST" action="/kategori/savekategori">
        {{ csrf_field() }}
        <div class="modal-body">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama </label>
                <input type="text" class="form-control" name="kode" id="exampleFormControlInput1"
                    placeholder="Masukkan Nama Kategori!">
                @if ($errors->has('nama'))
                    <div class="text-danger">
                        {{ $errors->first('nama') }}
                    </div>
                @endif

            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kode </label>
                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1"
                    placeholder="Masukkan Nama Kategori!">
                @if ($errors->has('nama'))
                    <div class="text-danger">
                        {{ $errors->first('nama') }}
                    </div>
                @endif

            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                <select class="form-select" name="keterangan">
                    <option value="">-Pilih Nilai- </option>
                    <option value="Core Factor"> Core Factor</option>
                    <option value="Secondary Factor"> Secondary Factor</option>
                </select>

            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nilai</label>
                <input type="text" class="form-control" name="nilai_minimal" id="exampleFormControlInput1"
                    placeholder="Masukkan Nama Kategori!">
                </select>

            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Kriteria</label>
                <select class="form-select" name="kri_id">
                    <option value="">-Pilih Kriteria- </option>
                    @foreach ($kriteria as $k)
                        <option value="{{ $k->id }}"> {{ $k->nama }}</option>
                    @endforeach
                </select>

            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                    name="bout"onclick="window.location.href='/kriteria'">Keluar</button>
                <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
            </div>
    </form>
@endsection
