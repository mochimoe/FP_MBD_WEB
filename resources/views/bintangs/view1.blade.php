@extends('layouts.app')

@section('title')
  Bintang - view 1
@endsection

@section('content')

<style>
  .uper {
    padding-top: 10%;
  }
</style>
<div class=container>
    <div class="container">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">View 1</h4>
            <p> Menampilkan judul buku dan nama pengarang</p>
          </div>
        </div>
      </div>
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
          <td>Nama Pengarang</td>
          <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach($views as $view)
        <tr>
            <td>{{$view->judul}}</td>
            <td>{{$view->nama_pengarang}}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>

@endsection