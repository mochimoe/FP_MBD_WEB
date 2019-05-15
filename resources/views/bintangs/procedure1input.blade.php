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
      <form method="post" action="{{ route('bintangs.procedure1output') }}">
          <div class="form-group">
              @csrf
              <label for="id_pengembalian">ID Pengembalian :</label>
              <input type="text" class="form-control" name="id_pengembalian"/>
          </div>
          <button type="submit" class="btn btn-primary">Hitung Denda</button>
      </form>
  </div>
</div>
@endsection