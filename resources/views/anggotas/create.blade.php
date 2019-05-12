<!-- create.blade.php -->

@extends('layouts.app')

@section('title')
    Library - Tambah Anggota
@endsection

@section('content')

<div class="card uper">
  <div class="card-header">
    Tambahkan Anggota
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
      <form method="post" action="{{ route('anggotas.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nama Anggota:</label>
              <input type="text" class="form-control" name="nama_anggota"/>
          </div>
          <div class="form-group">
              <label for="price">Tanggal Lahir :</label>
              <input type="text" class="form-control" name="tgl_lahir"/>
          </div>
          <div class="form-group">
              <label for="quantity">Tanggal Daftar :</label>
              <input type="text" class="form-control" name="tgl_daftar"/>
          </div>
          <div class="form-group">
              <label for="quantity">Jenis Kelamin :</label>
              <input type="text" class="form-control" name="kelamin"/>
          </div>
          <div class="form-group">
              <label for="quantity">Alamat :</label>
              <input type="text" class="form-control" name="alamat"/>
          </div>
          <div class="form-group">
              <label for="quantity">No. HP :</label>
              <input type="text" class="form-control" name="no_hp"/>
          </div>
          <button type="submit" class="btn btn-primary">Tambahkan Anggota</button>
      </form>
  </div>
</div>
@endsection