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
        @foreach($materi as $materi)
        <tr>
            <td>{{$materi->id}}</td>
            <td>{{$materi->nama_materi}}</td>
            <td>{{$materi->konten_materi}}</td>
            <td>{{$materi->mapels_id}}</td>
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
        <a href="{{ route('materi.create')}}"class="btn btn-primary">Add Subject</a>
    </tbody>
</table>
</div>
@endsection
