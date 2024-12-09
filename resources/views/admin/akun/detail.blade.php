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
    <div class="card card-detail">
        <h1>Detail Akun Ormas</h1>
    <div class="card-body">
        <div class="isi" style="display: flex;">
            <h5>Email :</h5>
            <p>{{ $model['email']}}</p>
        </div>
        <div class="isi" style="display: flex;">
            <h5>Role :</h5>
            <p>{{ $model['role']}}</p>
        </div>
        <div class="isi" style="display: flex;">
            <h5>Tanggal Dibuat :</h5>
            <p>{{ $model['created_at']}}</p>
        </div>
        <div class="isi" style="display: flex;">
            <h5>Tanggal Dirubah :</h5>
            <p>{{ $model['updated_at']}}</p>
        </div>
        <div class="isi" style="display: flex;">
            <button class="btn-ubah" onclick="location.href='{{ route('admin.akun.ubah', $model['id']) }}'">Ubah</button>
        </div>
        </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('..\js\main.js')}}"></script>
</body>
</html>