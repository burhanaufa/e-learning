@extends('layouts.app')

@section('content')
    {{-- <div id="wrapper class="container clearfix="" data-controller="" data-controller-inited="true">
        <div id="nf-main" class="nf-main prac-main col col-12 col-last col-right">
            <div class="course-hero-col col col-3 col-last" style="background-color: blueviolet">
                <div class= bg></div>
                <div class="header">
                    <a class="back" href="/dashboard">
                        <span class="css-sprite-chevrons"></span>
                        back
                    </a>
                </div>
    <div class="spacer col col-1"></div>
    <div class="course-chapter-col col col-8 col-last">
        <div id="cmp_explorations_topics_id">
<ul class="unstyled">
    <li class="row"> --}}
<div class="container">
    <h1>Bab Materi Fisika</h1>
    <br>
    <div class="card timbul2" >
        <div class="exploration-image mt-3 pb-3 d-flex">
            <div class="image">
                <img src="/img/Tatan.jpg" class="img elevation-3">
            </div>
            <div class="card-body"><h1><a href="{{ url('/') }}">
                {{ config('materi', 'Pengukuran') }}</h1></a>
            </div>
        </div>
    </div>
    <div class="card timbul3" >
        <div class="exploration-image mt-3 pb-3 d-flex">
            <div class="image">
                <img src="/img/Tatan.jpg" class="img elevation-3">
            </div>
            <div class="card-body"><h1><a href="{{ url('/') }}">
                {{ config('materi', 'Penjumlahan Vektor') }}</h1></a>
            </div>
        </div>
    </div>
    <div class="card timbul4" >
            <div class="exploration-image mt-3 pb-3 d-flex">
                <div class="image">
                    <img src="/img/Tatan.jpg" class="img elevation-3">
                </div>
                <div class="card-body"><h1><a href="{{ url('/') }}">
                    {{ config('materi', 'Gerak Lurus dengan Kecepatan dan Percepatan Konstan') }}</h1></a>
                </div>
            </div>
        </div>
    <div class="card timbul5" >
            <div class="exploration-image mt-3 pb-3 d-flex">
                <div class="image">
                    <img src="/img/Tatan.jpg" class="img elevation-3">
                </div>
            <div class="card-body"><h1><a href="{{ url('/') }}">
                {{ config('materi', 'Hukum Newton dan Penerapannya') }}</h1></a>
            </div>
            </div>
        </div>
    <div class="card timbul6" >
            <div class="exploration-image mt-3 pb-3 d-flex">
                <div class="image">
                    <img src="/img/Tatan.jpg" class="img elevation-3">
                </div>
            <div class="card-body"><h1><a href="{{ url('/') }}">
                {{ config('materi', 'Gerak Melingkar dengan Lajur Konstan') }}</h1></a>
            </div>
            </div>
        </div>
    <div class="card timbul7" >
        <div class="exploration-image mt-3 pb-3 d-flex">
            <div class="image">
                <img src="/img/Tatan.jpg" class="img elevation-3">
            </div>
                <div class="card-body"><h1><a href="{{ url('/') }}">
                    {{ config('materi', 'Elastisitas dan Hukum Hooke') }}</h1></a>
                </div>
            </div>
        </div>
    <div class="card timbul8" >
        <div class="exploration-image mt-3 pb-3 d-flex">
            <div class="image">
                <img src="/img/Tatan.jpg" class="img elevation-3">
            </div>
                <div class="card-body"><h1><a href="{{ url('/') }}">
                    {{ config('materi', 'Fluida Statik') }}</h1></a>
                </div>
            </div>
        </div>
    <div class="card timbul9" >
            <div class="exploration-image mt-3 pb-3 d-flex">
                <div class="image">
                    <img src="/img/Tatan.jpg" class="img elevation-3">
                </div>
                <div class="card-body"><h1><a href="{{ url('/') }}">
                    {{ config('materi', 'Suhu, Kalor dan Perpindahan Kalor') }}</h1></a>
                </div>
            </div>
        </div>
    <div class="card timbul2" >
        <div class="exploration-image mt-3 pb-3 d-flex">
            <div class="image">
                <img src="/img/Tatan.jpg" class="img elevation-3">
            </div>
                <div class="card-body"><h1><a href="{{ url('/') }}">
                    {{ config('materi', 'Alat-Alat Optik') }}</h1></a>
                </div>
            </div>
        </div>
    </div>
</html>
@include('inc.footer')


@endsection
