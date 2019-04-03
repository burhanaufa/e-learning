@extends('admin.index')

@section('content')
    <h1>Edit Siswa</h1>
    {{Form::model($siswa, array('route'=> array('siswa.update',$siswa->id),'method'=>'PUT'))}}
        <div class="form-group">
            {{Form::label('nama_siswa', 'Name')}}
            {{Form::text('nama_siswa',$siswa->nama_siswa, ['class' => 'form-control', 'placeholder'=>'Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('nis', 'Nis')}}
                {{Form::text('nis',$siswa->nis, ['class' => 'form-control', 'placeholder'=>'Nis'])}}
        </div>
        <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::text('password',$siswa->pass, ['class' => 'form-control', 'placeholder'=>'Password'])}}
    </div>
        {{Form::hidden('method','PUT')}}
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

