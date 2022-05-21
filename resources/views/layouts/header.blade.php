<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="d-flex flex-column">
    <header class="header mb-5" id="header">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top px-5">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ route('home') }}">Infulencer Library</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">TOP</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('infulencers.index') }}">Infulencers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('books.index') }}">Books</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>

    </header>