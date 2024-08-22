@extends('layouts.main')

@section('template')
    <h1>
        <p class="text-center"> <strong> TINDAK LANJUT PENILAIAN </strong> </p>
    </h1>


    <!-- Pembuatan Table -->
    <div class="container">
        <div class="container ">

            <form class="row" action="/caripenilaian" method="get">
                <div class="col-auto">
                    <input type="text" name="ar" id="ar" class="form-control">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mt-2">Search</button>
                </div>

            </form>


        </div>


        <div class="container card-body ">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama Lengkap</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                        <th>11</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($ha as $n)
                        <tr>
                            <th>{{ $n->guru->id }}</th>
                            <th>{{ $n->guru->nama }}</th>
                            <th>
                                @if ($n->satu == 4)
                                    <p>Amat Baik</p>
                                @elseif ($n->satu == 3)
                                    <p> Baik</p>
                                @elseif ($n->satu == 2)
                                    <p style="color: red;"> Tingkatkan </p>
                                @else
                                    <p style="color: red;"> Tingkatkan </p>
                                @endif


                            </th>
                            <th>
                                @if ($n->dua == 4)
                                    <p>Amat Baik</p>
                                @elseif ($n->dua == 3)
                                    <p>Baik</p>
                                @elseif ($n->dua == 2)
                                    <p style="color: red;"> Tingkatkan </p>
                                @else
                                    <p style="color: red;"> Tingkatkan </p>
                                @endif
                            </th>
                            <th>
                                @if ($n->tiga == 4)
                                    <p>Amat Baik</p>
                                @elseif ($n->tiga == 3)
                                    <p>Baik</p>
                                @elseif ($n->tiga == 2)
                                    <p style="color: red;"> Tingkatkan </p>
                                @else
                                    <p style="color: red;"> Tingkatkan </p>
                                @endif
                            </th>
                            <th>
                                @if ($n->empat == 4)
                                    <p>Amat Baik</p>
                                @elseif ($n->empat == 3)
                                    <p>Baik</p>
                                @elseif ($n->empat == 2)
                                    <p style="color: red;"> Tingkatkan </p>
                                @else
                                    <p style="color: red;"> Tingkatkan </p>
                                @endif

                            </th>
                            <th>
                                @if ($n->lima == 4)
                                    <p>Amat Baik</p>
                                @elseif ($n->lima == 3)
                                    <p>Baik</p>
                                @elseif ($n->lima == 2)
                                    <p style="color: red;"> Tingkatkan </p>
                                @else
                                    <p style="color: red;"> Tingkatkan </p>
                                @endif
                            </th>
                            <th>
                                @if ($n->enam == 4)
                                    <p>Amat Baik</p>
                                @elseif ($n->enam == 3)
                                    <p>Baik</p>
                                @elseif ($n->enam == 2)
                                    <p style="color: red;"> Tingkatkan </p>
                                @else
                                    <p style="color: red;"> Tingkatkan </p>
                                @endif
                            </th>
                            <th>
                                @if ($n->tujuh == 4)
                                    <p>Amat Baik</p>
                                @elseif ($n->tujuh == 3)
                                    <p>Baik</p>
                                @elseif ($n->tujuh == 2)
                                    <p style="color: red;"> Tingkatkan </p>
                                @else
                                    <p style="color: red;"> Tingkatkan </p>
                                @endif
                            </th>
                            <th>
                                @if ($n->delapan == 4)
                                    <p>Amat Baik</p>
                                @elseif ($n->delapan == 3)
                                    <p>Baik</p>
                                @elseif ($n->delapan == 2)
                                    <p style="color: red;"> Tingkatkan </p>
                                @else
                                    <p style="color: red;"> Tingkatkan </p>
                                @endif
                            </th>
                            <th>
                                @if ($n->sembilan == 4)
                                    <p>Amat Baik</p>
                                @elseif ($n->sembilan == 3)
                                    <p>Baik</p>
                                @elseif ($n->sembilan == 2)
                                    <p style="color: red;"> Tingkatkan </p>
                                @else
                                    <p style="color: red;"> Tingkatkan </p>
                                @endif

                            </th>
                            <th>
                                @if ($n->sepuluh == 4)
                                    <p>Amat Baik</p>
                                @elseif ($n->sepuluh == 3)
                                    <p>Baik</p>
                                @elseif ($n->sepuluh == 2)
                                    <p style="color: red;"> Tingkatkan </p>
                                @else
                                    <p style="color: red;"> Tingkatkan </p>
                                @endif
                            </th>
                            <th>
                                @if ($n->sebelas == 4)
                                    <p>Amat Baik</p>
                                @elseif ($n->sebelas == 3)
                                    <p>Baik</p>
                                @elseif ($n->sebelas == 2)
                                    <p style="color: red;"> Tingkatkan </p>
                                @else
                                    <p style="color: red;"> Tingkatkan </p>
                                @endif
                            </th>


                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>


    </div>
    <div class="row">
        <div class="col">
            <th><a href="/hasilpenilaian" class="btn btn-black">
                    <h5>Kembali<h5>
                </a></th>
        </div>

    </div>
@endsection
