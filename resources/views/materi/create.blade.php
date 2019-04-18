@extends('admin.index')

@section('content')
    <h1>Tambah Materi</h1>
    {!! Form::open(['action' => 'MateriController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('nama_materi', 'Name')}}
            {{Form::text('nama_materi','', ['class' => 'form-control', 'placeholder'=>'Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('Konten Materi', 'Isi Konten')}}
                {{Form::textarea('konten_materi','', ['class' => 'form-control', 'placeholder'=>'Konten Materi'])}}
        </div>
        <div class="form-group">
            {{Form::label('mapels[]','Nama Mapel')}}
            {{Form::text('mapels[]',null, ['single' => 'form-control', 'placeholder'=>'id Mapel'])}}
    </div>
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
