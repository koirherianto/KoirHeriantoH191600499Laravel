@extends('layouts.app')

@section('content')
    <div class="container">
    <a href="{!! route('berita.create') !!}" class="btn btn-info mb-3">Tambah Data</a>
    @include('berita.table')
    </div>
@endsection()