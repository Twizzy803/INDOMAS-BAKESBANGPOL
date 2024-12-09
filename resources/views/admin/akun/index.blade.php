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
                    <a href="{{ route('admin.akun.index')}}" class="nav-link active" style="color: #000; background-color: #fff; font-weight: bold;">
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
                <h1><i class="bi bi-person-badge"></i>Akun Ormas</h1>
                <form style="display: flex" action="{{ route('admin.akun.index')}}" method="GET">
                    <input class="form-control me-2 bg-secon" name="keyword" type="text" placeholder="Search" aria-label="Search" autocomplete="off">
                    <button class="btn-search" type="submit">Search</button>
                  </form>
            </div>
                <hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Dibuat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($models as $model)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $model['email'] }}</td>
                            <td>{{ $model['role'] }}</td>
                            <td>{{ $model['created_at'] }}</td>
                            <td>
                                <form action="{{ route('admin.akun.delete', $model['id']) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn-hapus" type="submit"><i class="bi bi-trash-fill"></i>Hapus</button>
                                </form>
                                <button class="btn-detail" onclick="location.href='{{ route('admin.akun.detail', $model['id']) }}'"><i class="bi bi-info-circle-fill"></i>Detail</button>
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
