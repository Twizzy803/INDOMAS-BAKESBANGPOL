<form method="POST" action="{{ route('admin.akun.simpan') }}">
    @csrf
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Masukkan Password">
    <select name="role">
        <option value="admin">Admin</option>
        <option value="ormas">Ormas</option>
    </select>
    <button type="submit">Simpan</button>
</form>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
