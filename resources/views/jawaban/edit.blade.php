@extends('admin.index')

@section('content')
    <h1>Edit Answers</h1>
    {{Form::model($pertanyaan, array('route'=> array('jawaban.update',$jawaban->id),'method'=>'PUT'))}}
        <div class="form-group">
            {{Form::label('isi_jawaban', 'Isi Jawaban')}}
            {{Form::textArea('isi_jawaban',$jawaban->isi_jawaban, ['class' => 'form-control', 'placeholder'=>'isi jawaban'])}}
        </div>
        {{Form::hidden('method','PUT')}}
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
