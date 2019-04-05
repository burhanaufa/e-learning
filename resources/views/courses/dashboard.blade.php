@extends('layouts.app')

@section('content')
<div class="container">
<title>{{ config('app.name', 'Portal Pembelajaran SMA 1 Semarang') }}</title>
<div><h2>COURSES</h2></div>
<div class="row mt-3">
<div class="col-sm-4 mt-2">
        <div class="card timbul" style="width: 18rem;">
        <img class="card-img-top" src="/images/matematika.png" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title"><a class="brand " href="{{ url('/Matematika') }}">
            {{ config('matematika', 'Matematika') }}</h5>
      </div>
    </div>
  </div>
    <div class="col-sm-4 mt-2">
    <div class="card timbul" style="width: 18rem;">
      <img class="card-img-top" src="/images/english.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><a class="brand " href="{{ url('/Binggris') }}">
            {{ config('binggris', 'Bahasa Inggris') }}</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mt-2">
    <div class="card timbul" style="width: 18rem;">
      <img class="card-img-top" src="images/bio.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><a class="brand " href="{{ url('/Biologi') }}">
            {{ config('biologi', 'Biologi') }}</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mt-2">
    <div class="card timbul" style="width: 18rem;">
      <img class="card-img-top" src="/images/fisika.gif" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><a class="brand " href="{{ url('/Fisika') }}">
            {{ config('fisika', 'Fisika') }}</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mt-2">
    <div class="card timbul" style="width: 18rem;">
      <img class="card-img-top" src="/images/kim.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><a class="brand " href="{{ url('/Kimia') }}">
            {{ config('kimia', 'Kimia') }}</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mt-2">
    <div class="card timbul" style="width: 18rem;">
      <img class="card-img-top" src="/images/bindo.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><a class="brand " href="{{ url('/Bindo') }}">
            {{ config('bindo', 'Bahasa Indonesia') }}</h5>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
