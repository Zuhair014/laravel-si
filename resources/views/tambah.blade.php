<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>

<h2>Form Tambah Data</h2>

{{-- NOTIFIKASI --}}
@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

{{-- ERROR VALIDASI --}}
@if ($errors->any())
    <ul style="color:red">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="/tambah" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Nama">
    <br><br>

    <input type="email" name="email" placeholder="Email">
    <br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>