@extends('layouts.app')

@section('content')
	<div class="container">
    	<div class="body m-10">
    		<div class="form-group">
    			{!! Form::label('judul', ' Judul'); !!}
    			{!! Form::label('judul',$berita->judul,['class' => 'form-control']); !!}
    		</div>
    		<div class="form-group">
    			{!! Form::label('created_at', ' Waktu Tambah'); !!}
    			{!! Form::label('created_at',$berita->created_at->format('d/m/Y H:i:s'),['class' => 'form-control']); !!}
    		</div>
            <div class="form-group">
                {!! Form::label('update_at', ' Waktu Ubah'); !!}
                {!! Form::label('update_at',$berita->updated_at->format('d/m/Y H:i:s'),['class' => 'form-control']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('isi', ' Isi'); !!}
                {!! Form::label('isi',$berita->isi,['class' => 'form-control']); !!}
            </div>
    		<a href="{!! route('berita.index')!!}" class="btn btn-success">Kembali</a>
    	</div>
	</di>
@endsection()














