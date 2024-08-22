@extends('layouts.main')

@section('template')
    <div class="container">
        <h2> Tambah Data Penilaian 
        </h2>
    </div>
    <form method="POST" action="/penilaian/savepenilaian">
        {{ csrf_field() }}
        <div class="modal-body">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama </label>
                <select class="form-select" name="nama">
                    <option value=""> -Pilih Nama Guru- </option>
                    @foreach ($guru as $g)
                        <option value="{{ $g->id }}"> {{ $g->nama }}</option>
                    @endforeach
                </select>

                @if ($errors->has('nama'))
                    <div class="text-danger">
                        {{ $errors->first('nama') }}
                    </div>
                @endif

            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"> Kategori - Kriteria
                </label>
                <select class="form-select" name="kateg">
                    <option value=""> -Pilih Kategori- </option>
                    @foreach ($katkris as $k)
                        <option value="{{ $k->id }}"> {{ $k->nama }} atau {{ $k->kode }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nilai
                </label>
                <select class="form-select" name="nilai">
                    <option value="">-Pilih Nilai- </option>
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
