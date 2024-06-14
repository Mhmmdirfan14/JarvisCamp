@extends('template')

@section('content')

<div class="container">
    <h1>Tambah Data Status</h1>

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
            <form method="POST" action="{{ route('status.store') }}">
                @csrf
                <div class="form-group row mb-3">
                  <label for="name" class="col-4 col-form-label">Nama</label> 
                  <div class="col-8">
                    <input id="name" name="name" placeholder="Masukan Nama Status" type="text" value="{{ old('name') }}" class="form-control">
                  </div>
                </div>
                  <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
        </div>
    </div>
</div>



@endsection