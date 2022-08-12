<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>SMK N 1 BANTUL</title>
</head>

<body>
    @include('partials.nav')
    @include('partials.jum')

    <div class="container mt-3">

        <!-- cari -->
        <div class="mt-3">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <form action="/pencarian/hasil" class="d-flex mt-5 justify-content-center">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search"
                            aria-label="Search" value="{{ request('search') }}">
                        <button class="btn btn-info" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- end cari -->

        <div class="row row-cols-1 row-cols-md-2 g-4 my-3">
            <!-- konten Kiri -->
            @yield('left-content')
            <!-- end kontent kiri -->

            @include('partials.fotter')