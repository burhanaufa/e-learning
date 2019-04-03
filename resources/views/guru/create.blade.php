@extends('layouts.app')

@section('content')
    <h1>Tambah Guru</h1>
    {!! Form::open(['action' => 'GuruController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('nama_guru', 'Name')}}
            {{Form::text('nama_guru','', ['class' => 'form-control', 'placeholder'=>'Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('nip', 'Nip')}}
                {{Form::text('nip','', ['class' => 'form-control', 'placeholder'=>'Nip'])}}
        </div>
        <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::text('password','', ['class' => 'form-control', 'placeholder'=>'Password'])}}
    </div>
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
