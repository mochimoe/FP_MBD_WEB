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
    Masukkan ID pengembalian!
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
      <form method="post" action="{{ route('aiss.procedure1output') }}">
          <div class="form-group">
              @csrf
              <label for="id_buku">ID Buku :</label>
              <input type="text" class="form-control" name="id_buku"/>
              <label for="stok">Stok baru :</label>
              <input type="text" class="form-control" name="stok"/>
          </div>
          <button type="submit" class="btn btn-primary">Perbarui Stok</button>
      </form>
  </div>
</div>
@endsection