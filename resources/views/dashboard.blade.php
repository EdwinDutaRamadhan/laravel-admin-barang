@extends('layout.dashboard-main')
@section('container')
    <h1>Dashboard</h1>
    <a href="tambah-barang">Tambah Barang</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Harga Barang</th>
            <th>Stok Barang</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach ($barang as $b)
            <tr>
                <td>{{ $b->nama }}</td>
                <td>{{ $b->jenis }}</td>
                <td>{{ $b->harga }}</td>
                <td>{{ $b->stok }}</td>
                <td><a href="/update-barang/{{ $b->id }}">Update</a></td>
                <td><a href="/delete-barang/{{ $b->id }}">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection
