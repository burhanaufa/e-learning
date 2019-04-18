@extends('admin.index')

@section('content')
<div class="container">
    <h1>Daftar Siswa</h1>
<div class ="col-md-12">
        <td><a href="{{ route('siswa.create')}}"class="btn btn-primary">Tambah Siswa</a></td>
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nama Siswa</td>
            <td>NIS</td>
            <td>Mapel</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @if(count($siswa) == 0)
            <tr>
                <td colspan="5" class="text-center">No Siswa Found</td>
            </tr>
        @else
        @foreach($siswa as $siswa)
        <tr>
            <td>{{$siswa->id}}</td>
            <td>{{$siswa->nama_siswa}}</td>
            <td>{{$siswa->nis}}</td>
            <td>
                @foreach($siswa->mapel as $mapel)
                    <span> {!! $mapel->nama_mapel !!}</span>
                @endforeach
            </td>
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
        @endif
    </tbody>
</table>
</div>
</div>
@endsection
