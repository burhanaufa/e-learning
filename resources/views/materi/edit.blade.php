@extends('admin.index')

@section('content')
    <h1>Edit Materi</h1>
    {{Form::model($materi, array('route'=> array('materi.update',$materi->id),'method'=>'PUT'))}}
        <div class="form-group">
            {{Form::label('nama_materi', 'Name')}}
            {{Form::text('nama_materi',$materi->nama_materi, ['class' => 'form-control', 'placeholder'=>'Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('Konten Materi', 'Isi Konten')}}
                {{Form::textarea('konten_materi',$materi->konten_materi, ['class' => 'form-control', 'placeholder'=>'Konten Materi'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection