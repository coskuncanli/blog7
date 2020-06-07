<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog 7.0</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div id="page-wrapper">
        <header id="masterheader" class="mb-3">
            <nav class="navbar navbar-expand-lg navbar-light bg-light container">
                <a class="navbar-brand" href="/">Blog 7.0</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Ana Sayfa <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">Hakkımda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">İletişim</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="arama" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ara</button>
                    </form>
                </div>
            </nav>
        </header>
        <main id="main" class="container">
            <div class="row">