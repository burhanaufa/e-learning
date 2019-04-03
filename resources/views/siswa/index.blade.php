@extends('admin.index')

@section('content')
<div class="container">
    <h1>Daftar Siswa</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nama Siswa</td>
            <td>NIS</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $siswa)
        <tr>
            <td>{{$siswa->id}}</td>
            <td>{{$siswa->nama_siswa}}</td>
            <td>{{$siswa->nis}}</td>
            <td><a href="{{ route('siswa.edit',$siswa->id)}}"class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('siswa.destroy',$siswa->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        <a href="{{ route('siswa.create')}}"class="btn btn-primary">Add Student</a>
    </tbody>
</table>
</div>
@endsection
