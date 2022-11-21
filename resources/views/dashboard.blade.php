@extends('layout.dashboard-main')
@section('container')
    <h1>Dashboard</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        @foreach ($barang as $b)
            <tr>
                <td></td>
            </tr>
        @endforeach
    </table>
@endsection
