@extends('layouts.app')

@section('content')
<div class="container">
<title>{{ config('app.name', 'Portal Pembelajaran SMA 1 Semarang') }}</title>
<div><h2>COURSES</h2></div>
<div class="row mt-3">
<div class="col-sm-4 mt-2">
        <div class="card timbul" style="width: 18rem;">
        <img class="card-img-top"src="/img/matematika.png" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title"><a class="brand " href="{{ url('/matematika') }}">
            {{ config('nama_mapel','matematika') }}</h5>
      </div>
    </div>
  </div>
    <div class="col-sm-4 mt-2">
    <div class="card timbul" style="width: 18rem;">
      <img class="card-img-top" src="/img/english.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><a class="brand " href="{{ url('/binggris') }}">
            {{ config('mapel', 'Bahasa Inggris') }}</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mt-2">
    <div class="card timbul" style="width: 18rem;">
      <img class="card-img-top" src="img/bio.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><a class="brand " href="{{ url('/bio') }}">
            {{ config('mapel', 'Biologi') }}</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mt-2">
    <div class="card timbul" style="width: 18rem;">
      <img class="card-img-top" src="/img/fisika.gif" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><a class="brand " href="{{ url('/fisika') }}">
            {{ config('mapel', 'Fisika') }}</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mt-2">
    <div class="card timbul" style="width: 18rem;">
      <img class="card-img-top" src="/img/kim.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><a class="brand " href="{{ url('/kimia') }}">
            {{ config('mapel', 'Kimia') }}</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mt-2">
    <div class="card timbul" style="width: 18rem;">
      <img class="card-img-top" src="/img/bindo.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><a class="brand " href="{{ url('/bindo') }}">
            {{ config('mapel', 'Bahasa Indonesia') }}</h5>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
