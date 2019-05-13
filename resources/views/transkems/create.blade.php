<!-- create.blade.php -->

@extends('layout.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Tambahkan Transaksi Pengembalian
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
      <form method="post" action="{{ route('transkems.store') }}">
          <div class="form-group">
              @csrf
              <label for="id_pinjam">ID Pinjam:</label>
              <input type="text" class="form-control" name="id_pinjam"/>
              <label for="id_petugas">ID Petugas:</label>
              <input type="text" class="form-control" name="id_petugas"/>
              <label for="id_buku">ID Buku:</label>
              <input type="text" class="form-control" name="id_buku"/>
              <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
              <input type="text" class="form-control" name="tanggal_pengembalian"/>
          </div>
          <button type="submit" class="btn btn-primary">Buat Transaksi</button>
      </form>
  </div>
</div>
@endsection