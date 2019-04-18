@extends('admin.index')

@section('content')
    <h1>Tambah Jawaban</h1>
    {!! Form::open(['action' => 'JawabanController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('isi_jawaban', 'Isi Jawaban')}}
            {{Form::textArea('isi_jawaban','', ['class' => 'form-control', 'placeholder'=>'Isi Jawaban'])}}
        </div>
        <div class="form-group">
            {!!Form::label('Select Course') !!}
            {!!Form::select('pertanyaan[]',$pertanyaan, null, ['multiple' => 'multiple', 'class' =>'form-control pertanyaan'])!!}
        </div>
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
