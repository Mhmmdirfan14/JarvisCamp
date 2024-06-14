@extends('template')

@section('content')

<div class="container">
    <h1>Edit Data Tugas</h1>

    <div class="card">
        <div class="card-body">
          @if (count($errors) > 0 )
          <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error )
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
          </div>
          @endif
            <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group row mb-3">
                  <label for="name" class="col-4 col-form-label">Nama</label> 
                  <div class="col-8">
                    <input id="name" name="name" placeholder="Masukan Nama Tugas" type="text" value="{{ $task->name }}" class="form-control">
                  </div>
                </div>
                <div class="form-group row mb-3">
                  <label for="deadline" class="col-4 col-form-label">Deadline</label> 
                  <div class="col-8">
                    <input id="deadline" name="deadline" type="date" value="{{ $task->deadline }}" class="form-control">
                  </div>
                </div>
                <div class="form-group row mb-3">
                  <label for="status" class="col-4 col-form-label">Status</label> 
                  <div class="col-8">
                    <select id="status" name="status" class="form-control">
                      <option value="Belum Dikerjakan" value="{{ $task->status == "Belum Dikerjakan" ? "selected" : "" }}">Belum Dikerjakan</option>
                      <option value="Sedang Dikerjakan" value="{{ $task->status == "Sedang Dikerjakan" ? "selected" : "" }}">Sedang Dikerjakan</option>
                      <option value="Selesai" value="{{ $task->status == "Selesai" ? "selected" : "" }}">Selesai</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row mb-3">
                  <label for="Description" class="col-4 col-form-label">Deskripsi</label> 
                  <div class="col-8">
                    <textarea id="d  escription" name="description" cols="40" rows="5" class="form-control" value="{{ $task->description }}">{{ $task->description }}</textarea>
                  </div>
                </div> 
                <div class="form-group row mb-3">
                  <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
        </div>
    </div>
</div>



@endsection