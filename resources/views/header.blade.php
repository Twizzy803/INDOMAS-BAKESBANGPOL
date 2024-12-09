<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href={{asset('..\css\style.css')}}>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>INDOMAS</title>
</head>

<body>
    <header>
        <div class="container">
            <a href="/" class="logo">
                <img src="{{asset('img/kotabatu.png')}}" alt="">
                <div class="logo_text"><p style="margin-top: 15%">KESBANGPOL</p> <p style="margin-top: -15%">Kota Batu</p></div>
            </a>             
                <div class="akun">
                    @if(Auth::check('email'))
                    <button type="button" onclick="location.href='{{route('logout')}}'">Keluar</button>   
                    @else 
                    <button type="button" onclick="location.href='{{route('login')}}'">MASUK</button>
                    @endif
                </div>
        </div>
    </header>



    <script src="{{asset('..\js\main.js')}}"></script>
</body>

</html>