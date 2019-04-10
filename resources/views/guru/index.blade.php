@extends('admin.index')

@section('content')
<div class="container">
<h1>Daftar Guru</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nama Guru</td>
            <td>NIP</td>
            <td>Mapel</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($guru as $guru)
        <tr>
            <td>{{$guru->id}}</td>
            <td>{{$guru->nama_guru}}</td>
            <td>{{$guru->nip}}</td>
            <td>{{$guru->mapels_id}}</td>
            <td><a href="{{ route('guru.edit',$guru->id)}}"class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('siswa.destroy',$guru->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        <a href="{{ route('guru.create')}}"class="btn btn-primary">Add Teacher</a>
    </tbody>
</table>
</div>
@endsection
