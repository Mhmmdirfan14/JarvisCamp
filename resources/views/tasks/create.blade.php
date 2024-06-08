@extends('template')

@section('content')

<div class="container">
    <h1>Tambah Data Tugas</h1>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('tasks.store') }}">
                @csrf
                <div class="form-group row mb-3">
                  <label for="name" class="col-4 col-form-label">Nama</label> 
                  <div class="col-8">
                    <input id="name" name="name" placeholder="Masukan Nama Tugas" type="text" value="{{ old('name') }}" class="form-control">
                  </div>
                </div>
                <div class="form-group row mb-3">
                  <label for="deadline" class="col-4 col-form-label">Deadline</label> 
                  <div class="col-8">
                    <input id="deadline" name="deadline" type="date" value="{{ old('deadline') }}" class="form-control">
                  </div>
                </div>
                <div class="form-group row mb-3">
                  <label for="status" class="col-4 col-form-label">Status</label> 
                  <div class="col-8">
                    <select id="status" name="status" class="form-control">
                      <option value="Belum Dikerjakan" value="{{ old('status') == "Belum Dikerjakan" ? "selected" : "" }}">Belum Dikerjakan</option>
                      <option value="Sedang Dikerjakan" value="{{ old('status') == "Sedang Dikerjakan" ? "selected" : "" }}">Sedang Dikerjakan</option>
                      <option value="Selesai" value="{{ old('status') == "Selesai" ? "selected" : "" }}">Selesai</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row mb-3">
                  <label for="Description" class="col-4 col-form-label">Deskripsi</label> 
                  <div class="col-8">
                    <textarea id="d  escription" name="description" cols="40" rows="5" class="form-control" value="{{ old('description') }}"></textarea>
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