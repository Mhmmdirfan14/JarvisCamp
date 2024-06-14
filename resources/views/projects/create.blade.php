@extends('template')

@section('content')

<div class="container">
    <h1>Tambah Project</h1>

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
          <form method="POST" action="{{ route('projects.store') }}" >
            @csrf
            <div class="form-group row mb-3">
              <label for="name" class="col-4 col-form-label">Nama</label> 
              <div class="col-8">
                <input id="name" name="name" placeholder="Masukan Nama Tugas" type="text" class="form-control" value="{{ old('name') }}">
              </div>
            </div>
            <div class="form-group row mb-3">
              <label for="description" class="col-4 col-form-label">Deskripsi</label> 
              <div class="col-8">
                <textarea id="description" name="description" cols="40" rows="5" class="form-control" value="{{ old('description') }}"></textarea>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label for="status" class="col-4 col-form-label">Status</label> 
              <div class="col-8">
                <select id="status" name="status" class="form-select">
                  <option value="belum dikerjakan" value="{{ old('status') == "Belum Dikerjakan" ? "selected" : "" }}">Belum Dikerjakan</option>
                  <option value="sedang dikerjakan" value="{{ old('status') == "Sedang Dikerjakan" ? "selected" : "" }}">Sedang Dikerjakan</option>
                  <option value="selesai" value="{{ old('status') == "Selesai" ? "selected" : "" }}">Selesai</option>
                </select>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label for="category" class="col-4 col-form-label">Kategori</label> 
              <div class="col-8">
                <select id="category" name="category" class="form-select">
                  <option value="latihan" value="{{ old('categories') == "latihan" ? "selected" : "" }}">Latihan</option>
                  <option value="tugas"  value="{{ old('categories') == "tugas" ? "selected" : "" }}">Tugas</option>
                  <option value="ujian"  value="{{ old('categories') == "ujian" ? "selected" : "" }}">Ujian</option>
                </select>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label for="start_date" class="col-4 col-form-label">Tanggal Mulai</label> 
              <div class="col-8">
                <input id="start_date" name="start_date" type="date" class="form-control" value="{{ old('start_date') }}">
              </div>
            </div>
            <div class="form-group row mb-3">
              <label for="end_date" class="col-4 col-form-label">Tanggal Selesai</label> 
              <div class="col-8">
                <input id="end_date" name="end_date" type="date" class="form-control" value="{{ old('end_date') }}">
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