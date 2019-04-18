@extends('admin.index')

@section('content')
<div class="container">
<h1>Daftar Pertanyaan</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Isi Pertanyaan</td>
            <td>Id Materi</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @if(count($pertanyaan) == 0)
            <tr>
                <td colspan="5" class="text-center">No Pertanyaan Found</td>
            </tr>
        @else
        @foreach($pertanyaan as $pertanyaan)
        <tr>
            <td>{{$pertanyaan->id}}</td>
            <td>{{$pertanyaan->isi_pertanyaan}}</td>
            <td>{{$pertanyaan->materis_id =$nama_materi}}</td>
            <td><a href="{{ route('pertanyaan.show',$pertanyaan->id)}}"class="btn btn-primary">Show</a></td>
            <td><a href="{{ route('pertanyaan.edit',$pertanyaan->id)}}"class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('pertanyaan.destroy',$pertanyaan->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @endif
        <a href="{{ route('pertanyaan.create')}}"class="btn btn-primary">Add Question</a>
    </tbody>
</table>
</div>
@endsection
