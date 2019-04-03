@extends('admin.index')

@section('content')
    <h1>Edit Kuis</h1>
    {{Form::model($kuis, array('route'=> array('kuis.update',$kuis->id),'method'=>'PUT'))}}
        <div class="form-group">
            {{Form::label('nama_kuis', 'Nama Kuis')}}
            {{Form::text('nama_kuis',$kuis->nama_kuis, ['class' => 'form-control', 'placeholder'=>'Nama Kuis'])}}
        </div>
        {{Form::hidden('method','PUT')}}
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
