@extends('layouts.app')

@section('content')
	<div class="container">
	{!! Form::open(['route' => 'berita.store']) !!}
    	<div class="body m-10">
    		<div class="form-group">
    			{!! Form::label('judul', ' Judul'); !!}
    			{!! Form::text('judul','',['class' => 'form-control','placeholder'=>'Judul Berita']); !!}
    		</div>
    		<div class="form-group">
    			{!! Form::label('isi', ' Isi'); !!}
    			{!! Form::textarea('isi','',['class' => 'form-control','placeholder'=>'Isi Berita']); !!}
    		</div>
    		<button class="btn btn-success">Simpan</button>
    		<a href="{!! route('berita.index')!!}" class="btn btn-danger">Batal</a>
    	</div>
	{!! Form::close() !!}
	</di>
@endsection()