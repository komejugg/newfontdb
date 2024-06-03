<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="{{ $robots }}" />

    <title>{{ $title }}</title>
    <meta name="description" content="{{$description}}')">




    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Style -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"  >




        
  </head>
  <body>
    <nav class="navbar py-3 navbar-expand-lg navbar-light bg-white">
        <div class="container">
          <a class="navbar-brand" href="{{route('index')}}">
            <img src="/img/logo.webp" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/free-font-download">フリーフォントDL</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="https://forms.gle/Yb666vNAJeZNEw5j7">お問い合わせ・掲載希望</a>
              </li>
             
              <!-- <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">LINK3</a>
              </li> -->


            </ul>
            <!-- <form class="d-flex mb-0 ms-0 ms-lg-4">
              <input class="form-control border-0 text-center rounded-pill" type="search" placeholder="Search" aria-label="Search">
            </form> -->
          </div>
        </div>
    </nav>