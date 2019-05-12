<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Tambahkan Penerbit
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
      <form method="post" action="{{ route('penerbits.store') }}">
          <div class="form-group">
              @csrf
              <label for="nama_penerbit">Nama Penerbit:</label>
              <input type="text" class="form-control" name="nama_penerbit"/>
          </div>
          <button type="submit" class="btn btn-primary">Buat Penerbit</button>
      </form>
  </div>
</div>
@endsection