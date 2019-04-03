@extends('admin.index')

@section('content')
    <h1>Tambah Pertanyaan</h1>
    {!! Form::open(['action' => 'PertanyaanController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('isi_pertanyaan', 'Nama Mapel')}}
            {{Form::textArea('isi_pertanyaan','', ['class' => 'form-control', 'placeholder'=>'Isi Pertanyaan'])}}
        </div>
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
