@extends('layouts.app')

section('title')
  Bintang - Join 2
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
          <td>Nama Anggota</td>
          <td>Buku yang Dipinjam</td>
          <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach($joins as $join)
        <tr>
            <td>{{$join->nama}}</td>
            <td>{{$join->judul}}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection