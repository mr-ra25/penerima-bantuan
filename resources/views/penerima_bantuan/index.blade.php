@extends('layout')

@section('content')
<h2>Data Penerima Bantuan Sosial</h2>
<a href="{{ route('penerima-bantuan.create') }}">Tambah Data</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIK</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->nama_lengkap }}</td>
        <td>{{ $item->nik }}</td>
        <td>{{ $item->alamat }}</td>
        <td>
            <a href="{{ route('penerima-bantuan.show', $item->id) }}">Lihat</a>
            <a href="{{ route('penerima-bantuan.edit', $item->id) }}">Edit</a>
            <form action="{{ route('penerima-bantuan.destroy', $item->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection