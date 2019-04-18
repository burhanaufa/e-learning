@extends('admin.index')

@section('main-content')
    <h1>Edit Guru</h1>
    {{Form::model($guru, array('route'=> array('guru.update',$guru->id),'method'=>'PATCH'))}}
        <div class="form-group">
            {{Form::label('nama_guru', 'Name')}}
            {{Form::text('nama_guru',$guru->nama_guru, ['class' => 'form-control', 'placeholder'=>'Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('nip', 'Nip')}}
                {{Form::text('nip',$guru->nip, ['class' => 'form-control', 'placeholder'=>'Nip'])}}
        </div>
        <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::text('password',$guru->password, ['class' => 'form-control', 'placeholder'=>'Password'])}}
    </div>
    <div class="form-group">
            {!!Form::label('Select Course') !!}
            {!!Form::select('mapel[]',$mapel, null, ['multiple' => 'multiple', 'class' =>'form-control mapel'])!!}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
