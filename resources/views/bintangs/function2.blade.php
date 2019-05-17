@extends('layouts.app')

@section('title')
  Bintang - Function 2
@section('content')

@section('content')
<style>
  .uper {
    padding-top: 10%;
  }
</style>
<div class="container">
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
                <td>Banyak Pinjam</td>
                <td></td>
              </tr>
          </thead>
          <tbody>
              @foreach($funcs as $func)
              <tr>
                  <td>{{$func->nama_anggota}}</td>
                  <td>{{$func->banyak_pinjam}}</td>
                  <td></td>
              </tr>
              @endforeach
          </tbody>
        </table>
      <div>
</div>

@endsection