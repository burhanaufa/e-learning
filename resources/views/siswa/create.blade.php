@extends('admin.index')

@section('content')
    <h1>Tambah Siswa</h1>
    <form method="post" action="{{ route('siswa.store') }}">
            <div class="form-group">
                @csrf
                <label for="name">Nama Siswa:</label>
                <input type="text" class="form-control" name="nama_siswa"/>
            </div>
            <div class="form-group">
                <label for="nis">NIS :</label>
                <input type="text" class="form-control" name="nis"/>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" class="form-control" name="password"/>
            </div>
            <button type="submit" class="btn btn-primary">Add </button>
        </form>
    </div>
  </div>
@endsection
