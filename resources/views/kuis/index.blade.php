@extends('admin.index')

@section('content')
<div class="container">
<h1>Daftar Kuis</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nama Kuis</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($kuis as $kuis)
        <tr>
            <td>{{$kuis->id}}</td>
            <td>{{$kuis->nama_kuis}}</td>
            <td><a href="{{ route('kuis.edit',$kuis->id)}}"class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('kuis.destroy',$kuis->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        <a href="{{ route('kuis.create')}}"class="btn btn-primary">Add Quiz</a>
    </tbody>
</table>
</div>
@endsection
