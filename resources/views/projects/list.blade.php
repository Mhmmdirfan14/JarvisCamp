@extends('template')
@section('content')
    <div class="container">
        <h1 class="text-center">Daftar Tabel Project</h1>

        <div class="card mt-3">
            <div class="card-header">
                <h4>Data Tabel</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <a href="{{ route('projects.create') }}" class="btn btn-primary btn-sm">tambah data</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                                <th>Categories</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                
                                {{-- <th>Kategori</th> --}}
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ substr($project->description, 0, 50)  }} ...</td>
                                <td>{{ $project->status->name }}</td>
                                <td>{{ $project->categories }}</td>
                                <td>{{ $project->start_date }}</td>
                                <td>{{ $project->end_date }}</td>
                                
                                {{-- <td>{{ $task->category }}</td> --}}
                                <td class="d-flex"> 
                                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning btn-sm">edit</a>
                                    <form action="{{ route('projects.delete', $project->id) }}" method="post">
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