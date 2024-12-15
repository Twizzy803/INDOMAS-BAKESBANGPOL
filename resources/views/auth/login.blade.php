<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('..\css\style.css')}}">
    <title>INDOMAS</title>
</head>
<body>
    <div class="login">
        <div class="logo_login">
            <img class="lg-batu" src="{{asset('img\logobatu.png')}}" alt="">
            <img class="lg-kesbang" src="{{asset('img\KESBANG.png')}}" alt="">
        </div><br>
        @if ($errors->all())
        <button class="btn btn-danger mb-4 uppercase" style="margin-top: 2%; width:40%">
            Email atau kata sandi salah!
        </button>
    @endif
        <div class="card card-login">
            <form class="form_login" action="{{ route('login') }}" method="POST">
                @csrf
                <h2>Login</h2>
                    <input type="email" name="email" id="email" placeholder="Email" required><br><br>
                    <input type="password" name="password" id="password" placeholder="Password" required><br>
                <button class="masukbutton"
                    name="masuk" type="submit">MASUK</button>
            </form>
          </div>
    
</body>
</html>
