@extends('layout.dashboard-main')
@section('container')
    @foreach ($barang as $b)
        @include('partials.edit-form')
    @endforeach()
    @endsection
