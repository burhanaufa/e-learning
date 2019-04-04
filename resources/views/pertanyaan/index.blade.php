@extends('admin.index')

@section('content')
<div class="container">
<h1>Daftar Pertanyaan</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Isi Pertanyaan</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($pertanyaan as $pertanyaan)
        <tr>
            <td>{{$pertanyaan->id}}</td>
            <td>{{$pertanyaan->isi_pertanyaan}}</td>
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
        <a href="{{ route('pertanyaan.create')}}"class="btn btn-primary">Add Question</a>
    </tbody>
</table>
</div>
@endsection
