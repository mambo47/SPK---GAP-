@extends('layouts.main')

@section('template')
    <div class="container">
        <h2> Tambah Data Kriteria
        </h2>
    </div>
    <form method="POST" action="/kriteria/savekriteria">
        {{ csrf_field() }}
        <div class="modal-body">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Kriteria</label>
                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1"
                    placeholder="Masukkan Nama Kriteria!" required>
            </div>

        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1"> Bobot Nilai </label>
            <input type="number" class="form-control" name="keterangan" id="exampleFormControlInput1" min="1"
                max="100" placeholder="Masukkan Penilaian! (bentuk persen)" required>
        </div>


        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                name="bout"onclick="window.location.href='/kriteria'">Keluar</button>
            <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
        </div>
    </form>
@endsection
