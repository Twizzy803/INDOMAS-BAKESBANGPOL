<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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
                <a href="{{route('admin.dashboard')}}" class="nav-link link-body-emphasis" aria-current="page" style="color: #fff !important; font-weight:bold">
                    <i class="bi bi-house-door"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{route('admin.ormas.index')}}" class="nav-link active" style="color: #000; background-color: #fff; font-weight: bold;">
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


    <section class="daftar">
        <div class="container">
            <div class="judul">
                <h1><i class="bi bi-file-earmark-bar-graph"></i>Data Ormas</h1>
                <form style="display: flex" action="{{ route('admin.ormas.index')}}" method="GET">
                    <input class="form-control me-2 bg-secon" name="keyword" type="text" placeholder="Search" aria-label="Search" autocomplete="off">
                    <button class="btn-search" type="submit">Search</button>
                  </form>
            </div>
                <hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pemohon</th>
                            <th scope="col">Nama Ormas</th>
                            <th scope="col">Bidang Kajian</th>
                            <th scope="col">Dibuat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($ormaes as $ormas)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $ormas['pemohon'] }}</td>
                            <td>{{ $ormas['nama_ormas'] }}</td>
                            <td>{{ $ormas->kategoriOrmas['nama'] }}</td>
                            <td>{{ $ormas['created_at'] }}</td>
                            <td>
                                <button class="btn-detail" onclick="location.href='{{ route('admin.ormas.detail', $ormas['id'] )}}'"><i class="bi bi-info-circle-fill"></i>Detail</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('..\js\main.js')}}"></script>
</body>
</html>
{{-- <table>
    <tr>
        <th>Pemohon</th>
        <th>Nama Ormas</th>
        <th>Kategori Ormas</th>
        <th>Dibuat</th>
        <th>Aksi</th>
    </tr>
    @foreach ($ormaes as $ormas)
        <tr>
            <td>{{ $ormas['pemohon'] }}</td>
            <td>{{ $ormas['nama_ormas'] }}</td>
            <td>{{ $ormas->kategoriOrmas['nama'] }}</td>
            <td>{{ $ormas['created_at'] }}</td>
            <td>
                <a href="{{ route('admin.ormas.detail', $ormas['id']) }}">Detail</a>
            </td>
        </tr>
    @endforeach
</table> --}}
