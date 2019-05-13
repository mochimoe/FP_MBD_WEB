<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Tambahkan Pengarang
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('pengarangs.store') }}">
          <div class="form-group">
              @csrf
              <label for="nama_pengarang">Nama Pengarang:</label>
              <input type="text" class="form-control" name="nama_pengarang"/>
          </div>
          <button type="submit" class="btn btn-primary">Buat Pengarang</button>
      </form>
  </div>
</div>
@endsection