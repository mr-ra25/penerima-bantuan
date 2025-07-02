@extends('layout')

@section('content')
<h2>Tambah Data Penerima</h2>
<form action="{{ route('penerima-bantuan.store') }}" method="POST">
    @csrf
    <input type="text" name="nama_lengkap" placeholder="Nama" required><br>
    <input type="text" name="nik" placeholder="NIK" required><br>
    <textarea name="alamat" placeholder="Alamat" required></textarea><br>
    <input type="date" name="tanggal_lahir" required><br>
    <select name="jenis_kelamin">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>
    <input type="text" name="no_hp" placeholder="No HP" required><br>
    <select name="status_bantuan">
        <option value="Layak">Layak</option>
        <option value="Tidak Layak">Tidak Layak</option>
    </select><br>
    <button type="submit">Simpan</button>
</form>
@endsection