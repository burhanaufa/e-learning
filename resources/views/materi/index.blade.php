@extends('admin.index')

@section('content')
<div class="container">
<h1>Daftar Materi</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nama Materi</td>
            <td>Konten Materi</td>
            <td>Mapel</>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @if(count($materi) == 0)
            <tr>
                <td colspan="5" class="text-center">No Materi Found</td>
            </tr>
        @else
        @foreach($materi as $materi)
        <tr>
            <td>{{$materi->id}}</td>
            <td>{{$materi->nama_materi}}</td>
            <td>{{$materi->konten_materi}}</td>
            <td>{{$materi->mapels}}</td>
            {{-- <td>
                @foreach($materi->mapels as $mapel)
                    <span class="label label-info">{!! $mapels->nama_mapel !!}</span>
                @endforeach
            </td> --}}
            <td><a href="{{ route('materi.show',$materi->id)}}"class="btn btn-primary">Show</a></td>
            <td><a href="{{ route('materi.edit',$materi->id)}}"class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('materi.destroy',$materi->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @endif
        <a href="{{ route('materi.create')}}"class="btn btn-primary">Add Subject</a>
    </tbody>
</table>
</div>
@endsection
