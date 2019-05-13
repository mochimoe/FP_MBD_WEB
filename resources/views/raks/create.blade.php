@extends('layouts.app')

@section('content')

<div class="card uper">
  <div class="card-header">
    Tambahkan Rak Buku
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-success">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('raks.store') }}">
          <div class="form-group">
              @csrf
              <label for="rak">Rak :</label>
              <input type="text" class="form-control" name="kapasitas_rak"/>
          </div>
          <button type="submit" class="btn btn-primary">Tambah Rak</button>
      </form>
  </div>
</div>
@endsection