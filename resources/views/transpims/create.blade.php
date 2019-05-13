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
    Tambahkan Transaksi Peminjaman
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
      <form method="post" action="{{ route('transpims.store') }}">
          <div class="form-group">
              @csrf
              <label for="id_anggota">ID Anggota:</label>
              <input type="text" class="form-control" name="id_anggota"/>
              <label for="id_petugas">ID Petugas:</label>
              <input type="text" class="form-control" name="id_petugas"/>
              <label for="tanggal_pinjam">Tanggal Pinjam:</label>
              <input type="text" class="form-control" name="tanggal_pinjam"/>
              <label for="tanggal_kembali">Tanggal Kembali:</label>
              <input type="text" class="form-control" name="tanggal_kembali"/>
          </div>
          <button type="submit" class="btn btn-primary">Buat Transaksi</button>
      </form>
  </div>
</div>
@endsection