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
    Tambahkan Petugas
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
      <form method="post" action="{{ route('petugass.store') }}">
          <div class="form-group">
              @csrf
              <label for="nama">Nama:</label>
              <input type="text" class="form-control" name="nama"/>
              <label for="alamat">Alamat:</label>
              <input type="text" class="form-control" name="alamat"/>
              <label for="jenis_kelamin">Jenis Kelamin:</label>
              <input type="text" class="form-control" name="jenis_kelamin"/>
              <label for="no_hp">No HP:</label>
              <input type="text" class="form-control" name="no_hp"/>
              <label for="tanggal_lahir">Tanggal Lahir:</label>
              <input type="text" class="form-control" name="tanggal_lahir"/>
          </div>
          <button type="submit" class="btn btn-primary">Buat Petugas</button>
      </form>
  </div>
</div>
@endsection