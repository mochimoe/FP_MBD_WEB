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
          <td>Judul</td>
          <td>Tanggal Pinjam</td>
          <td>Tanggal Pengembalian</td>
        </tr>
    </thead>
    <tbody>
        @foreach($joins as $join)
        <tr>
            <td>{{$join->id}}</td>
            <td>{{$join->nama_anggota}}</td>
            <td>{{$join->judul}}</td>
            <td>{{$join->jenis}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection