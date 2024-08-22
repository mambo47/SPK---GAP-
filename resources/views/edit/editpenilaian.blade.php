@extends('layouts.main')

@section('template')
    <div class="container">
        <h2> Edit Data Penilaian
        </h2>
    </div>
    <form method="POST" action="/penilaian/update/{{ $nilai->id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="modal-body">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Guru</label>
                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" readonly
                    placeholder="Masukkan Nama Guru!" value=" {{ $nilai->guru->nama }}">
                @if ($errors->has('nama'))
                    <div class="text-danger">
                        {{ $errors->first('nama') }}
                    </div>
                @endif

            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"> Kategori - Kriteria
                </label>
                <select class="form-select" name="kateg" >
                    <option value="{{ $nilai->kategori_kriteria_id }}" @readonly(true)> {{ $nilai->kategori_kriteria->nama }} </option>
                   
                </select>
            </div>


            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nilai
                </label>
                <select class="form-select" name="nilai">
                    <option value="">-{{ $nilai->nilai }}- </option>
                    <option value="1"> Kurang</option>
                    <option value="2"> Cukup </option>
                    <option value="3"> Baik</option>
                    <option value="4"> Amat Baik </option>
                </select>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                    name="bout"onclick="window.location.href='/penilaian'">Keluar</button>
                <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
            </div>
    </form>
@endsection
