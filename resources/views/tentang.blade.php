
@extends('layouts.main')

@section('template')
    
<!-- Spk -->
<div class="container mt-5">
    <h4>Spk</h4>
    Sistem Pendukung Keputusan (SPK) atau Decision Support System (DSS) adalah sebuah sistem yang mampu memberikan
    kemampuan pemecahan masalah maupun kemampuan pengkomunikasian untuk masalah dengan kondisi semi terstruktur dan tak
    terstruktur. Sistem ini digunakan untuk membantu pengambilan keputusan dalam situasi semi terstruktur dan situasi
    yang tidak terstruktur, dimana tak seorangpun tahu secara pasti bagaimana keputusan seharusnya dibuat (Turban,
    2001). <br> </br>
    Profile Matching (GAP) merupakan suatu proses yang sangat penting dalam manajemen SDM di mana terlebih dahulu
    ditentukan
    kompetensi (kemampuan) yang diperlukan oleh suatu jabatan. (Safriatno Sianturi, 2015). Dalam proses Profile Matching
    secara garis besar merupakan proses membandingkan antara kompetensi individu ke dalam kompetensi jabatan sehingga
    dapat diketahui perbedaan kompetensinya (disebut juga gap), Semakin kecil gap yang dihasilkan maka bobot nilainya
    semakin besar berarti memiliki peluang lebih besar untuk karyawan menempati posisi tersebut. (Safriatno Sianturi,
    2015).

  </div>



  <!-- GAP -->

  <div class="container mt-5">
    <h4>GAP</h4>
    Dalam proses profile matching secara garis besar merupakan proses membandingkan antara kompetensi individu ke dalam
    kompetensi jabatan sehingga dapat diketahui perbedaan kompetensinya (disebut juga gap) <br> <br>
    <h6 class="text-center"> Rumus GAP </h6>
    <h3>
      <p class="text-center"> Gap = Profil Karyawan – Profile Jabatan </p>
    </h3>
    <br> <br>


    Langkah Metode Profile Matching (GAP) <br>
    <!-- konten langkah -->
    <div class="container">
      <dl class="row">
        <dt class="col-sm-1">1.</dt>
        <dd class="col-sm-11"><b>Menentukan Kriteria</b></dd>
        <ul class="list-unstyled">
          Kriteria yaitu dasar penilaian, disini kriteria berupa komponen yang sudah ada di Pelaksanaan Supervisi SMAN
          1 Depok.
          
          </li>
        </ul>
      </dl>

    </div>
    <div class="container">
      <dl class="row">
        <dt class="col-sm-1">2.</dt>
        <dd class="col-sm-11"><b>Pembobotan</b></dd>
        <ul class="list-unstyled">
          Pembobotan yaitu pemberian nilai setiap kriteria penilaian, disini nilai ditentukan dari SMAN 1 Depok
        </ul>
      </dl>
    </div>

    <!-- BOBOT -->
    <div class="container">
      <h4>Bobot</h4>
      adalah nilai pasti yang diambil dari rumus Profile Matching (GAP). <br>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Selisih</th>
            <th scope="col">Bobot Nilai</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>0</td>
            <td>5</td>
            <td>Tidak ada selisih(kompetensi sesuai dengan yang dibutuhkan)</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>1</td>
            <td>4,5</td>
            <td>Kompetensi individu kelebihan 1 tingkat/level</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>-1</td>
            <td>4</td>
            <td>Kompetensi individu kekurangan 1 tingkat/level</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>2</td>
            <td>3,5</td>
            <td>Kompetensi individu kelebihan 2 tingkat/level</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>-2</td>
            <td>3</td>
            <td>Kompetensi individu kekurangan 2 tingkat/level</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>3</td>
            <td>2,5</td>
            <td>Kompetensi individu kelebihan 3 tingkat/level</td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>-3</td>
            <td>2</td>
            <td>Kompetensi individu kekurangan 3 tingkat/level</td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>4</td>
            <td>1,5</td>
            <td>Kompetensi individu kelebihan 4 tingkat/level</td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td>-4</td>
            <td>1</td>
            <td>Kompetensi individu kekurangan 4 tingkat/level</td>
          </tr>
        </tbody>
      </table>
    </div> <br>
    <!-- /BOBOT -->

    <div class="container">
      <dl class="row">
        <dt class="col-sm-1">3.</dt>
        <dd class="col-sm-11"><b>Perhitungan dan Pengelompokan Core Factor dan Secondary Factor</b></dd>
        <ul class="list-unstyled">
          Core Factor adalah faktor penting dalam perhitungan dan Secondary Factor yaitu faktor pendukung dari core
          faktor
          <br> <br>
          <ul class="list-unstyled">
            <li><b>Core factor (60%) </b>
            </li>
            <li><b>Secondar factor (40%) </b>
             
            </li>
          </ul>
          </li>
        </ul>
      </dl>

    </div>

    
    </div><div class="container">
      <dl class="row">
        <dt class="col-sm-1">4.</dt>
        <dd class="col-sm-11"><b>Perhitungan Nilai Total,</b></dd>
        <ul class="list-unstyled">
          Perhitungan nilai total yaitu menghitung seluruh nilai dari perhitungan sebelumnya (core faktor dan secondary
          faktor). Seperti diawal, di perhitungan ini nilai total kita menggunakan cara perhitungan dengan bobpt .
          </li>
        </ul>
      </dl>

    </div>

    <div class="container">
      <dl class="row">
        <dt class="col-sm-1">5.</dt>
        <dd class="col-sm-11"><b>Perangkingan</b></dd>
        <ul class="list-unstyled">
          Pada proses ini adalah proses akhir dari metode Profile Matching (GAP) yaitu merangking tiap Alternatif
          (subjek yaitu karyawan)
        </ul>
      </dl>

    </div>
@endsection
  