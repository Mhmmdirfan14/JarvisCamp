@extends('template')
@section('content')
    <div class="container">
        <h1 class="text-center mt-2">Daftar Tugas</h1>
        <hr>

        <div class="row">
          @foreach ($tasks as $task )
            <div class="col-12 col-md-4">
              <div class="card mt-2">
                <div class="card-body">
                  <h4 class="card-title">{{ $task['name'] }}</h4>
                  <small>Deadline: {{ \Carbon\Carbon::parse($task['deadline'])->format('d F Y') }}</small> <br>
                  <span class="badge bg-danger mt-4">{{ $task->status->name}}</span>
                  <p class="mt-4">{{ $task['description'] }}</p>
                  <div class="mt-4">
                    <a href="/tasks" class="btn btn-warning">Detail</a>
                  </div>

                </div>
              </div>
            </div>
          @endforeach
        </div>
    </div>
@endsection