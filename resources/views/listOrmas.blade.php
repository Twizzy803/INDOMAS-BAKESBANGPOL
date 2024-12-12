<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href={{asset('..\css\style.css')}}>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>INDOMAS</title>
</head>

<body>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Ormas</th>
                <th scope="col">Bidang Kajian</th>
                <th scope="col">Dibuat</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($ormaes as $ormas)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $ormas['nama_ormas'] }}</td>
                <td>{{ $ormas->kategoriOrmas['nama'] }}</td>
                <td>{{ \Carbon\Carbon::parse($ormas['created_at'])->setTimezone('Asia/Jakarta')->translatedFormat('d F Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>



    <script src="{{asset('..\js\main.js')}}"></script>
</body>

</html>