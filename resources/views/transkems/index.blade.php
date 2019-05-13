@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>ID Pinjam</td>
          <td>ID Petugas</td>
          <td>ID Buku</td>
          <td>Tanggal Pengembalian</td>
          <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach($transkems as $transkem)
        <tr>
            <td>{{$transkem->id}}</td>
            <td>{{$transkem->id_pinjam}}</td>
            <td>{{$transkem->id_petugas}}</td>
            <td>{{$transkem->id_buku}}</td>
            <td>{{$transkem->tanggal_pengembalian}}</td>
            <td>
                <form action="{{ route('transkems.destroy', $transkem->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection