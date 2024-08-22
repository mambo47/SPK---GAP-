<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <title>@yield('title', $title)</title> --}}
</head>
<div class="w-50 center border rounded px-5 py-5 mx-auto mt-5 mb-2">
    <div class="text-center">
        <a class="navbar-brand" mt-4 href="/home">
            <img src="{{ 'img/Logo.jpeg ' }}" alt="" width="104" height="104" class="me-2">
            SPK Kinerja Guru SMAN 1 Depok
        </a>
    </div>
    @yield('header')
</div>

</html>
