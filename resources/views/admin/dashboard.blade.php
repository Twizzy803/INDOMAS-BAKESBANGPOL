<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/franken-ui@1.1.0/dist/css/core.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('..\css\admin.style.css')}}">
    <title>Admin Indomas</title>
</head>
<body>
    @include('admin.header')
<section class="sidebar">
    <div class="d-flex flex-column flex-shrink-0 p-3 dashboard">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{route('admin.dashboard')}}" class="nav-link active" aria-current="page" style="color: #000; background-color: #fff; font-weight: bold;">
                    <i class="bi bi-house-door"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{route('admin.ormas.index')}}" class="nav-link link-body-emphasis" style="color: #fff !important; font-weight:bold">
                    <i class="bi bi-file-earmark-bar-graph"></i>
                    Data Ormas
                </a>
            </li>
            <li>
                <a href="{{route('admin.kategori.index')}}" class="nav-link link-body-emphasis" style="color: #fff !important; font-weight:bold">
                    <i class="bi bi-tags"></i>
                    Bidang Kajian
                </a>
            </li>
            <li>
                <a href="{{ route('admin.akun.index')}}" class="nav-link link-body-emphasis" style="color: #fff !important; font-weight:bold">
                    <i class="bi bi-person-badge"></i>
                    Akun Ormas
                </a>
            </li>
        </ul>
    </div>
</section>

<section class="home">
    <div class="container">
      <div class="judul">
        <h1><i class="bi bi-house-door"></i>Dashboard</h1>
      </div>
        <hr>
        <div class="home1">
          <div class="card" style="width: 15rem">
            <a href="{{ route('admin.ormas.index') }}" style="text-decoration: none; color:#000">
              <div class="card-body">
                <h5 class="card-title"><i class="bi bi-file-earmark-bar-graph"></i>Data Ormas</h5>
              </div>
            </a>
          </div>
          <div class="card" style="width: 15rem;">
            <a href="{{ route('admin.kategori.index')}}" style="text-decoration: none; color: #000;">
              <div class="card-body">
                <h5 class="card-title"><i class="bi bi-tags"></i>Kategori</h5>
                </div>
              </div>
            </a>
            <div class="card" style="width: 15rem;">
              <a href="{{ route('admin.akun.index') }}" style="text-decoration: none; color: #000;">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-person-badge"></i>Akun Ormas</h5>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
  </section>
   
    <script src="https://unpkg.com/franken-ui@1.1.0/dist/js/core.iife.js" type="module"></script>
    <script src="https://unpkg.com/franken-ui@1.1.0/dist/js/icon.iife.js" type="module"></script>
  <script src="{{asset('..\js\main.js')}}"></script>
    
</body>
</html>