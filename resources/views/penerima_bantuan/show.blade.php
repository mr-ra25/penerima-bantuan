@extends('layout')

@section('content')
<h2>Detail Data Penerima</h2>
<p>Nama: {{ $data->nama_lengkap }}</p>
<p>NIK: {{ $data->nik }}</p>
<p>Alamat: {{ $data->alamat }}</p>
<p>Tanggal Lahir: {{ $data->tanggal_lahir }}</p>
<p>Jenis Kelamin: {{ $data->jenis_kelamin }}</p>
<p>No HP: {{ $data->no_hp }}</p>
<p>Status Bantuan: {{ $data->status_bantuan }}</p>
<a href="{{ url('/penerima-bantuan') }}">Kembali</a>
@endsection