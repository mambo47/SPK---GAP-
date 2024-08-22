@extends('layouts.appp')

@section('header')
    <h1>Login</h1>

    <div class="row">
        <div class="col-md-12">
            @if (session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <form action="/submit" method="POST">
                @csrf
                <div class="mb-12">
                    <label>Email <span class="text-danger">*</span></label>
                    <input class="form-control" type="email" id = email name="email" value="{{ old('email') }}" autofocus required>
                </div>
                <div class="mb-12">
                    <label>Password <span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="password" id="password" required/>
                </div>
                

                <div class="mb-12 mt-2" >
                    <button class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
