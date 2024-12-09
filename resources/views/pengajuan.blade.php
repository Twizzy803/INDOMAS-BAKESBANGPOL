<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href={{asset('..\css\style.css')}}>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <title>INDOMAS</title>
    </head>
    <body>
        
        <div class="px-4 pt-5 mb-4 text-center border-bottom" id="bg-Form">
            <h1 style="color: white; font-family: 'Poppins' sans-serif; font-weight: bold; margin-top: 5%;">Formulir Pengajuan, Legalitas dan Rencana Kerja Organisasi Masyarakat Kota Batu</h1>
            <p style="color: white;">pemerintahan kota batu badan kesatuan bangsa dan politik balai kota among tani 
                jl. panglima sudirman no 507 kota batu 65313</p>
        </div>
    <form class="form-pengajuan" method="POST" action="{{ route('site.pengajuan.simpan') }}" enctype="multipart/form-data">
        @csrf
        <label for="pemohon">Nama Pemohon</label><br>
        <input type="text" name="pemohon" placeholder="Nama Pemohon" required>
        <br>
        <label for="telp">Nomor Telphone</label><br>
        <input type="text" name="no_telp" placeholder="Nomor Telphone" required>
        <br>
        <label for="email">Email</label><br>
        <input type="email" name="email" placeholder="Email" required>
        <br>
        <label for="password">Password</label><br>
        <input type="text" name="password" placeholder="Password" required>
        <br>
        <label for="nama_ormas">Nama Organisasi</label><br>
        <input type="text" name="nama_ormas" placeholder="Nama Ormas" required>
        <br>
        <label for="alamat">Alamat Kantor Organisasi</label><br>
        <input type="text" name="alamat" placeholder="Alamat" required>
        <br>
        <label for="struktur">Struktur Pengurus (Ketua, Sekretaris, Bendahara, Dan lainnya)</label><br>
        <textarea name="struktur_pengurus" required></textarea>
        <br>
        <label for="kategori">Bidang Kajian :</label>
        <select name="kategori_ormas">
            @foreach($kategories as $kategori)
            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
            @endforeach
        </select>
        <br>
        <label for="dokumen">Dokumen pendukung aktifitas, berupa foto, video, lokasi kantor, atau program rencana kerja</label><br>
        <p style="font-size: small; color: #00000080;">Upload maks 10 MB formas PDF.</p>
        <input type="file" name="dokumen" style="border: none" required>
        <br><br>
        <button type="submit">Kirim</button>
    </form>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @include('footer')
</body>
</html>