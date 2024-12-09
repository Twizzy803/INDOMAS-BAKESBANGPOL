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
        <h1>Ubah Bidang Kajian</h1>
    <div class="card-body">
        <form style="justify-self: center" method="POST" action="{{ route('admin.kategori.update', $model['id']) }}">
            @csrf
            @method("PATCH")
            <input type="text" name="nama" placeholder="Nama Kategori" value="{{ $model['nama'] }}">
            <button class="btn-simpan" type="submit">Simpan</button>
        </form>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('..\js\main.js')}}"></script>
</body>
</html>
