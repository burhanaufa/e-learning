@extends('admin.index')

@section('content')
    <h1>Edit Question</h1>
    {{Form::model($pertanyaan, array('route'=> array('pertanyaan.update',$pertanyaan->id),'method'=>'PUT'))}}
        <div class="form-group">
            {{Form::label('nama_mapel', 'Nama Mapel')}}
            {{Form::textArea('nama_mapel',$pertanyaan->isi_pertanyaan, ['class' => 'form-control', 'placeholder'=>'isi pertanyaan'])}}
        </div>
        {{Form::hidden('method','PUT')}}
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
