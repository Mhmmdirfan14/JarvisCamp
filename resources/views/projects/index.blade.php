@extends('template')
@section('content')
<div class="container">
    <h1 class="text-center mt-2">Daftar Project</h1>
    <hr>

    <div class="row">
      @foreach ($projects as $project )
        <div class="col-12 col-md-4">
          <div class="card mt-2">
            <div class="card-body">
              <h4 class="card-title">{{ $project['name'] }}</h4>
              <p class="mt-4">{{ $project['description'] }}</p>
              <span class="badge bg-danger mt-4">{{ $project->status->name}}</span><br>
              <span class="badge bg-danger mt-4">{{ $project->categories}}</span>
              <small>Start Date: {{ \Carbon\Carbon::parse($project['start_date'])->format('d F Y') }}</small> <br>
              <small>End Date: {{ \Carbon\Carbon::parse($project['end_date'])->format('d F Y') }}</small> 
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