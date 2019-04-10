@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bab Materi Kimia</h1>
    <br>
    <div class="card timbul2" >
        <div class="exploration-image mt-3 pb-3 d-flex">
            <div class="image">
                <img src="/img/Tatan.jpg" class="img elevation-3">
            </div>
            <div class="card-body"><h1><a href="{{ url('/') }}">
                {{ config('materi', 'Peran Kimia dalam Kehidupan') }}</h1></a>
            </div>
        </div>
    </div>
    <div class="card timbul3" >
        <div class="exploration-image mt-3 pb-3 d-flex">
            <div class="image">
                <img src="/img/Tatan.jpg" class="img elevation-3">
            </div>
            <div class="card-body"><h1><a href="{{ url('/') }}">
                {{ config('materi', 'Perkembangan Model Atom') }}</h1></a>
            </div>
        </div>
    </div>
    <div class="card timbul4" >
            <div class="exploration-image mt-3 pb-3 d-flex">
                <div class="image">
                    <img src="/img/Tatan.jpg" class="img elevation-3">
                </div>
                <div class="card-body"><h1><a href="{{ url('/') }}">
                    {{ config('materi', 'Struktur Lewis') }}</h1></a>
                </div>
            </div>
        </div>
    <div class="card timbul5" >
            <div class="exploration-image mt-3 pb-3 d-flex">
                <div class="image">
                    <img src="/img/Tatan.jpg" class="img elevation-3">
                </div>
            <div class="card-body"><h1><a href="{{ url('/') }}">
                {{ config('materi','Bentuk Molekul') }}</h1></a>
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
