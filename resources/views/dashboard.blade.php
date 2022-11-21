@extends('layout.dashboard-main')
@section('container')
    <h1 align="center">Dashboard</h1>
    <div class="container mt-3">
        <a class="btn btn-primary btn-sm" href="tambah-barang">Tambah Barang</a>
    </div>
    <div class="container mt-4">
        <table class="table" border="1" cellpadding="10" cellspacing="0">
            <thead class="table-light">
                <tr>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Harga Barang</th>
                    <th>Stok Barang</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $b)
                <tr>
                    <td>{{ $b->nama }}</td>
                    <td>{{ $b->jenis }}</td>
                    <td>{{ $b->harga }}</td>
                    <td>{{ $b->stok }}</td>
                    <td><a class="btn btn-warning btn-sm" href="/update-barang/{{ $b->id }}">Update</a></td>
                    <td><a class="btn btn-danger btn-sm" href="/delete-barang/{{ $b->id }}" onclick="return confirm('apakah anda yakin ingin menghapus {{ $b->nama }} {{ $b->jenis }}? ');">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
