@extends('layouts.app')

section('title')
  Bintang - Join 1
@section('content')

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
            <td>{{$join->judul}}</td>
            <td>{{$join->tanggal_pinjam}}</td>
            <td>{{$join->tanggal_pengembalian}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection