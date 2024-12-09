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
        <h1>Detail Data Ormas</h1>
    <div class="card-body">
        <div class="isi" style="display: flex;">
            <h5>Pemohon :</h5>
            <p>{{ $ormas['pemohon']}}</p>
        </div>
        <div class="isi" style="display: flex;">
            <h5>Telphone :</h5>
            <p>{{ $ormas['telp']}}</p>
        </div>
        <div class="isi" style="display: flex;">
            <h5>Email :</h5>
            <p>{{ $ormas['email']}}</p>
        </div>
        <div class="isi" style="display: flex;">
            <h5>Nama Organisasi :</h5>
            <p>{{ $ormas['nama_ormas']}}</p>
        </div>
        <div class="isi" style="display: flex;">
            <h5>Alamat :</h5>
            <p>{{ $ormas['alamat']}}</p>
        </div>
        <div class="isi" style="display: flex;">
            <h5>Nama Organisasi :</h5>
            <p>{{ $ormas['nama_ormas']}}</p>
        </div>
        <div class="isi" style="display: flex;">
            <h5>Bidang Kajian :</h5>
            <p>{{ $ormas->kategoriOrmas['nama']}}</p>
        </div>
        <div class="isi" style="display: flex;">
            <h5>Struktur Pengurus :</h5>
            {{ $ormas['struktur_pengurus']}}
        </div>
        <div class="isi" style="display: flex;">
            <h5>Status :</h5>
            <p>{{ $ormas['status']}}</p>
        </div>
        <div class="isi" style="display: flex;">
            <h5>Tanggal Pengajuan :</h5>
            <p>{{ $ormas['created_at']}}</p>
        </div>
        <div class="isi" style="display: flex;">
            <h5>Dokumen Pendukung :</h5>
            <a href="{{ asset('dokumen_ormas/' . $ormas['nama_ormas'] . '/' . $ormas->dokumen['path']) }}">{{ $ormas->dokumen['nama'] }}</a>
        </div>
        <div class="isi" style="display: flex;">
            @if($ormas->status == 'pending')
<form action="{{ route('admin.ormas.setuju', $ormas['id']) }}" method="POST">
    @csrf
    <button class="btn-setuju" type="submit">Setuju</button>
</form>
@elseif($ormas->status == 'setuju')
<form action="{{ route('admin.ormas.hapusAkses', $ormas['id']) }}" method="POST">
    @csrf
    <button class="btn-akses" type="submit">Hapus Akses Login</button>
</form>
@endif

@if(Session::has('success'))
{!! Session::get('success') !!}
@endif

@if(Session::has('error'))
{!! Session::get('error') !!}
@endif
        </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('..\js\main.js')}}"></script>
</body>
</html>