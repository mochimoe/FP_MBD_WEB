@extends('layout')

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
          <td>ID Anggota</td>
          <td>ID Petugas</td>
          <td>Tanggal Kembali</td>
          <td>Tanggal Pinjam</td>
          <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach($transpims as $transpim)
        <tr>
            <td>{{$transpim->id}}</td>
            <td>{{$transpim->id_anggota}}</td>
            <td>{{$transpim->id_petugas}}</td>
            <td>{{$transpim->tanggal_kembali}}</td>
            <td>{{$transpim->tanggal_pinjam}}</td>
            <td>
                <form action="{{ route('transpims.destroy', $transpim->id)}}" method="post">
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