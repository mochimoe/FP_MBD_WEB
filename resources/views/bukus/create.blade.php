<!-- create.blade.php -->

@extends('layouts.app')
@section('title')
    Library - Tambah Buku
@endsection

@section('content')

<div class="card uper">
  <div class="card-header">
    Tambahkan Buku
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
      <form method="post" action="{{ route('bukus.store') }}">
          <div class="form-group">
              @csrf
              <label for="judul">Judul:</label>
              <input type="text" class="form-control" name="judul"/>
          </div>
          <div class="form-group">
              <label for="price">ID Pengarang :</label>
              <input type="text" class="form-control" name="id_pengarang"/>
          </div>
          <div class="form-group">
              <label for="quantity">ID Penerbit :</label>
              <input type="text" class="form-control" name="id_penerbit"/>
          </div>
          <div class="form-group">
              <label for="quantity">ID Rak :</label>
              <input type="text" class="form-control" name="id_rak"/>
          </div>
          <div class="form-group">
              <label for="quantity">Tanggal Terbit :</label>
              <input type="text" class="form-control" name="tanggal_terbit"/>
          </div>
          <div class="form-group">
              <label for="quantity">Stok :</label>
              <input type="text" class="form-control" name="stok"/>
          </div>
          <button type="submit" class="btn btn-primary">Tambahkan Buku</button>
      </form>
  </div>
</div>
@endsection