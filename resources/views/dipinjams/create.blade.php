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
    Tambahkan Peminjaman
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
      <form method="post" action="{{ route('dipinjams.store') }}">
          <div class="form-group">
              @csrf
              <label for="id_pinjam">ID Pinjam:</label>
              <input type="text" class="form-control" name="id_pinjam"/>
              <label for="id_buku">ID Buku:</label>
              <input type="text" class="form-control" name="id_buku"/>
          </div>
          <button type="submit" class="btn btn-primary">Buat</button>
      </form>
  </div>
</div>
@endsection