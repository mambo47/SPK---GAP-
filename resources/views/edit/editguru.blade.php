@extends('layouts.main')

@section('template')
    <div class="container">
        <h2> Edit Data Guru
        </h2>
    </div>
    <form method="POST" action="/guru/update/{{ $guru->id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="modal-body">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Guru</label>
                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1"
                    placeholder="Masukkan Nama Guru!" value=" {{ $guru->nama }}">
                @if ($errors->has('nama'))
                    <div class="text-danger">
                        {{ $errors->first('nama') }}
                    </div>
                @endif

            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="kelamin" >
                    <option value="">-{{ $guru->kelamin }}-</option>
                    <option value="Laki - Laki"> Laki - Laki</option>
                    <option value="Perempuan"> Perempuan</option>
                </select>

            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Alamat</label>
                <input type="text" class="form-control" name="alamat" id="exampleFormControlInput1"
                    placeholder="Masukkan  Alamat!" value=" {{ $guru->alamat }}">
                @if ($errors->has('alamat'))
                    <div class="text-danger">
                        {{ $errors->first('alamat') }}
                    </div>
                @endif

            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" name="bout"
                onclick="window.location.href='/guru'">Keluar</button>
            <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
        </div>
    </form>
@endsection
