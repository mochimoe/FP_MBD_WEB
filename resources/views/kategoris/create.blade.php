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
    Tambahkan Kategori
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
      <form method="post" action="{{ route('kategoris.store') }}">
          <div class="form-group">
              @csrf
              <label for="jenis">Jenis:</label>
              <input type="text" class="form-control" name="jenis"/>
          </div>
          <button type="submit" class="btn btn-primary">Buat Kategori</button>
      </form>
  </div>
</div>
@endsection