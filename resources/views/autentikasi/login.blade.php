@extends('layouts.auth')
@section('content')
    <div class="container mx-auto min-h-screen flex flex-col justify-center">
        {{-- LOGO --}}
        <div class="flex flex-row justify-center gap-x-2">
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/logos/kota_batu.webp') }}" width="130px">
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/logos/bakesbangpol.webp') }}" width="170px">
            </div>
        </div>
        <form class="flex flex-col" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Masukkan Email">
            <input type="password" name="password" placeholder="Masukkan Password">
            <button type="submit">Masuk</button>
        </form>
    </div>
@endsection
