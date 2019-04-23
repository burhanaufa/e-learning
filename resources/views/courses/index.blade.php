@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Bab Materi Kimia</h1>
  <br>
  @foreach($course as $course)
  <div class="card timbul2">
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

</html>
@include('inc.footer')


@endsection