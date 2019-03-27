@extends('layouts.app')

@section('content')
    <h1>Tambah Kuis</h1>
    {!! Form::open(['action' => 'KuisController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('nama_kuis', 'Nama Kuis')}}
            {{Form::text('nama_kuis','', ['class' => 'form-control', 'placeholder'=>'Nama Kuis'])}}
        </div>
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
