@extends('template')
@section('content')
    <div class="container">
        <h1 class="text-center">Detail Tugas</h1>
        <hr>
        <div class="row mt-4 justify-content-center">
            <div class="col-12 col-md-4 ">
                <div class="card mt-2">
                    <div class="card-body">
                        <h4 class="card-title">{{ $task['name'] }}</h4>
                        <small>Deadline: {{ \Carbon\Carbon::parse($task['deadline'])->format('d F Y') }}</small>
                        <br>
                        <p class="card-text mt-2 text-left">{{ $task['description'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
