@extends('layouts.main')

@section('template')
    <div class="container">
        <h2> Tambah Data Guru
        </h2>
    </div>
    <form method="POST" action="/guru/saveguru">
        {{ csrf_field() }}
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIP</label>
                <input type="text" class="form-control" name="id" id="exampleFormControlInput1"
                    placeholder="Masukkan nip anda!">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1"
                    placeholder="Masukkan Nama Lengkap anda!">
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="kelamin">
                    <option value="">-Pilih Jenis Kelamin- </option>
                    <option value="Laki-Laki"> Laki-Laki</option>
                    <option value="Perempuan"> Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1"
                    rows="3"placeholder="Masukkan Alamat anda!"></textarea>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                name="bout"onclick="window.location.href='/guru'">Keluar</button>
            <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
        </div>
    </form>
@endsection
