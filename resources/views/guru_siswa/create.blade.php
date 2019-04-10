@extends('admin.index')

@section('content')
    <h1>Tambah Pivot Guru dan Siswa</h1>
    {!! Form::open(['action' => 'Guru_SiswaController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('guru_id', 'Id Guru')}}
            {{Form::text('guru_id','', ['class' => 'form-control', 'placeholder'=>'Id Guru'])}}
        </div>
        <div class="form-group">
                {{Form::label('siswa_id', 'Id Siswa')}}
                {{Form::text('siswa_id','', ['class' => 'form-control', 'placeholder'=>'Id Siswa'])}}
        </div>
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
