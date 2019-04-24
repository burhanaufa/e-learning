@extends('layouts.app')

@section('content')
<div class="container">
    <title>{{ config('app.name', 'Portal Pembelajaran SMA 1 Semarang') }}</title>
<h1>Materi</h1>
  <br>
  @foreach($course as $course)
  <h1>{{$course->nama_mapel}}</h1>
  <div class="card timbul5">
    <div class="exploration-image mt-3 pb-3 d-flex">
      <div class="image">
        <img src="/img/Tatan.jpg" class="img elevation-3">
      </div>
      <div class="card-body">
        <h1><a href="{{ url('/') }}">
            {{$course->nama_materi}}</h1></a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection


