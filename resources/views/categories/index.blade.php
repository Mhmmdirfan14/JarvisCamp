@extends('template')
@section('content')

<div class="container">
    <h1 class="text-center">Daftar Tabel kategori</h1>

    <div class="card mt-3">
        <div class="card-header">
            <h4>Data Tabel</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm">tambah data</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->name}}</td>
                            
                            <td class="d-flex"> 
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">edit</a>
                                <form action="{{ route('categories.delete', $category->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">hapus</button>
                                </form>
                            </td>
                        </tr>     
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

@endsection
