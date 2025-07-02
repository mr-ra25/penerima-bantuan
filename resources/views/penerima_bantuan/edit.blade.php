@extends('layout')

@section('content')
<h2>Edit Data Penerima</h2>
<form action="{{ route('penerima-bantuan.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nama_lengkap" value="{{ $data->nama_lengkap }}" required><br>
    <input type="text" name="nik" value="{{ $data->nik }}" required><br>
    <textarea name="alamat" required>{{ $data->alamat }}</textarea><br>
    <input type="date" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}" required><br>
    <select name="jenis_kelamin">
        <option value="Laki-laki" {{ $data->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
        <option value="Perempuan" {{ $data->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
    </select><br>
    <input type="text" name="no_hp" value="{{ $data->no_hp }}" required><br>
    <select name="status_bantuan">
        <option value="Layak" {{ $data->status_bantuan == 'Layak' ? 'selected' : '' }}>Layak</option>
        <option value="Tidak Layak" {{ $data->status_bantuan == 'Tidak Layak' ? 'selected' : '' }}>Tidak Layak</option>
    </select><br>
    <button type="submit">Update</button>
</form>
@endsection