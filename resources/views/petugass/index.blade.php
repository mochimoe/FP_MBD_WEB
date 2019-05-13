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
          <td>Nama</td>
          <td>Alamat</td>
          <td>Jenis Kelamin</td>
          <td>No HP</td>
          <td>Tanggal Lahir</td>
          <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach($petugass as $petugas)
        <tr>
            <td>{{$petugas->id}}</td>
            <td>{{$petugas->nama}}</td>
            <td>{{$petugas->alamat}}</td>
            <td>{{$petugas->jenis_kelamin}}</td>
            <td>{{$petugas->no_hp}}</td>
            <td>{{$petugas->tanggal_lahir}}</td>
            <td></td>
            <td>
                <form action="{{ route('petugass.destroy', $petugas->id)}}" method="post">
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