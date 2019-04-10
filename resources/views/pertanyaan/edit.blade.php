@extends('admin.index')

@section('content')
    <h1>Edit Question</h1>
    {{Form::model($pertanyaan, array('route'=> array('pertanyaan.update',$pertanyaan->id),'method'=>'PUT'))}}
        <div class="form-group">
            {{Form::label('nama_mapel', 'Nama Mapel')}}
            {{Form::textArea('nama_mapel',$pertanyaan->isi_pertanyaan, ['class' => 'form-control', 'placeholder'=>'isi pertanyaan'])}}
        </div>
        <div class="form-group">
            {{Form::label('materis_id', 'Id Mapel')}}
            {{Form::text('materis_id',$pertanyaan->materis_id, ['class' => 'form-control', 'placeholder'=>'id Materi'])}}
        </div>
        {{Form::hidden('method','PUT')}}
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
