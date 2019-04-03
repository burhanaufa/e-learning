@extends('admin.index')

@section('content')
<h1>Daftar MataPelajaran</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nama Mapel</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($mapel as $mapel)
        <tr>
            <td>{{$mapel->id}}</td>
            <td>{{$mapel->nama_mapel}}</td>
            <td><a href="{{ route('mapel.edit',$mapel->id)}}"class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('mapel.destroy',$mapel->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        <a href="{{ route('mapel.create')}}"class="btn btn-primary">Add Subject</a>
    </tbody>
</table>
@endsection
