@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nama Materi</td>
            <td>Konten Materi</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($materi as $materi)
        <tr>
            <td>{{$materi->id}}</td>
            <td>{{$materi->nama_materi}}</td>
            <td>{{$materi->konten_materi}}</td>
            <td><a href="{{ route('materi.edit',$materi->id)}}"
    class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('materi.destroy',$materi->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        <a href="{{ route('materi.create',$materi->id)}}"class="btn btn-primary">Add Subject</a>
    </tbody>
</table>
@endsection
